<?php

namespace App\Models;

use App\Components\Helpers;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * 支付单.
 */
class Payment extends Model
{
    protected $table = 'payment';

    protected $guarded = [];

    public function scopeUid($query)
    {
        return $query->whereUserId(Auth::id());
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function close() // 关闭支付单
    {
        return $this->update(['status' => -1]);
    }

    public function failed() // 关闭支付单
    {
        return $this->close() && $this->order()->close();
    }

    public function complete() // 完成支付单
    {
        return $this->update(['status' => 1]);
    }

    public function getAmountAttribute($value)
    {
        return $value / 100;
    }

    public function setAmountAttribute($value)
    {
        return $this->attributes['amount'] = $value * 100;
    }

    public function getAmountTagAttribute(): string
    {
        return Helpers::getPriceTag($this->amount);
    }

    // 订单状态
    public function getStatusLabelAttribute(): string
    {
        switch ($this->attributes['status']) {
            case -1:
                $status_label = trans('common.failed_item', ['attribute' => trans('user.pay')]);
                break;
            case 1:
                $status_label = trans('common.success_item', ['attribute' => trans('user.pay')]);
                break;
            case 0:
            default:
                $status_label = trans('common.payment.status.wait');
        }

        return $status_label;
    }
}
