<?php

namespace App\Console\Commands;

use App\Components\Helpers;
use App\Mail\userExpireWarning;
use App\Mail\userExpireWarningToday;
use App\Models\User;
use Illuminate\Console\Command;
use Log;
use Mail;

class UserExpireAutoWarning extends Command
{
    protected $signature = 'userExpireAutoWarning';
    protected $description = '用户临近到期自动发邮件提醒';

    public function handle(): void
    {
        $jobStartTime = microtime(true);

        // 用户临近到期自动发邮件提醒
        if (sysConfig('expire_warning')) {
            $this->userExpireWarning();
        }

        $jobEndTime = microtime(true);
        $jobUsedTime = round(($jobEndTime - $jobStartTime), 4);

        Log::info('---【'.$this->description.'】完成---，耗时'.$jobUsedTime.'秒');
    }

    private function userExpireWarning(): void
    {
        $expireDays = sysConfig('expire_days');
        // 只取SSR没被禁用的用户，其他不用管
        foreach (User::whereEnable(1)->where('expired_at', '<', date('Y-m-d', strtotime(sysConfig('expire_days').' days')))->get() as $user) {
            // 用户名不是邮箱的跳过
            if (filter_var($user->email, FILTER_VALIDATE_EMAIL) === false) {
                continue;
            }

            // 计算剩余可用时间
            $lastCanUseDays = Helpers::daysToNow($user->expired_at);
            if ($lastCanUseDays === 0) {
                $title = '账号过期提醒';
                $content = '您的账号将于今天晚上【24:00】过期。';

                $logId = Helpers::addNotificationLog($title, $content, 1, $user->email);
                Mail::to($user->email)->send(new userExpireWarningToday($logId));
            } elseif ($lastCanUseDays > 0) {
                $title = '账号过期提醒';
                $content = '您的账号还剩'.$lastCanUseDays.'天即将过期。';

                $logId = Helpers::addNotificationLog($title, $content, 1, $user->email);
                Mail::to($user->email)->send(new userExpireWarning($logId, $lastCanUseDays));
            }
        }
    }
}
