<?php

return [
    'account'             => [
        'credit'           => 'Balance',
        'status'           => 'Status',
        'level'            => 'Level',
        'group'            => 'Group',
        'speed_limit'      => 'Speed Limit',
        'remain'           => 'Remaining Data',
        'time'             => 'Package Validity',
        'last_login'       => 'Last Login',
        'reset'            => '{0}Data will be reset in <code id="restTime">:days</code>|{1} Data will be reset in :days day|restTime|[2,*] Data will be reset in :days days',
        'connect_password' => 'Proxy Connect Password',
        'reason'           => [
            'normal'            => 'Normal',
            'expired'           => 'Expired',
            'overused'          => 'You have reach the <code>:data</code> GB hourly data spend limit<br/> Wait <code id="banedTime">:min</code> to cool down',
            'traffic_exhausted' => 'OUT OF DATA',
            'unknown'           => 'UNKNOWN ERROR, Please try to refresh your browser first before contact admin for help',
        ],
    ],
    'home'                => [
        'attendance'         => [
            'attribute' => 'Attendance',
            'disable'   => 'Attendance System is disabled',
            'done'      => 'Already checked in, come back tomorrow!',
            'success'   => 'You got :data data',
            'failed'    => 'System ❌ Error',
        ],
        'traffic_logs'       => 'Data Records',
        'announcement'       => 'Announcements',
        'wechat_push'        => 'WeChat Notification Service',
        'chat_group'         => 'Chat Group',
        'empty_announcement' => 'No Announcement',
    ],
    'purchase_to_unlock'  => 'Unlock after purchasing service',
    'purchase_required'   => 'This feature is disabled for non-paying users! Please',
    'more'                => 'More',
    'attribute'           => [
        'node'    => 'Node',
        'data'    => 'Data',
        'ip'      => 'IP Address',
        'isp'     => 'ISP',
        'address' => 'Address',
    ],
    'purchase_promotion'  => 'Purchase Now!',
    'menu'                => [
        'helps'           => 'Help',
        'home'            => 'Home',
        'invites'         => 'Invite',
        'invoices'        => 'Invoice',
        'nodes'           => 'Node',
        'referrals'       => 'Promotion',
        'shop'            => 'Shop',
        'profile'         => 'Settings',
        'tickets'         => 'Ticket',
        'admin_dashboard' => 'Dashboard',
    ],
    'contact'             => 'Contact Info',
    'oauth'               => [
        'bind_title' => 'Binding Your Social Accounts',
        'not_bind'   => 'Not Yet Bound',
        'bind'       => 'Bind',
        'rebind'     => 'Rebind',
        'unbind'     => 'Unbind',
    ],
    'coupon'              => [
        'attribute' => 'Coupon',
        'voucher'   => 'Voucher',
        'recharge'  => 'Gift Card',
        'discount'  => 'Discount',
        'error'     => [
            'unknown'  => 'Unknown Coupon',
            'used'     => 'Coupon has been used',
            'expired'  => 'Expired',
            'run_out'  => 'Run Out of Usage',
            'inactive' => 'Coupon Inactive yet',
            'wait'     => 'The Event will begin until :time, Please wait',
            'unmet'    => 'Conditions of use are not met',
            'minimum'  => 'The minimum requirement of this coupon is :amount',
            'overused' => 'You can only use this coupon once|You can only use this coupon :times times',
            'users'    => 'This account is not eligible for promotions',
            'services' => 'This item is not qualify for this discount, please check the promotion terms',
        ],
    ],
    'error_response'      => 'Something went wrong, please try again later.',
    'invite'              => [
        'attribute'       => 'Invitation code',
        'counts'          => 'Total <code>:num</code> invitation codes',
        'tips'            => 'Can generate <strong> :num </strong> invitation codes, valid within :days',
        'logs'            => 'Invitation Record',
        'promotion'       => 'Register and activate with your invitation code, Both sides will get <mark>:traffic</mark> traffic as rewards; when invitees purchase services, you will get <mark>:referral_percent%</mark> of their spend amount as commission.',
        'generate_failed' => 'Failed to generate',
    ],
    'reset_data'          => [
        ''          => 'Reset Data',
        'required'  => 'Required',
        'cost_tips' => 'This following action will cost :amount!',
        'lack'      => 'Insufficient balance. Please recharge!',
        'logs'      => 'User purchase reset data',
        'success'   => 'Reset Successfully',
    ],
    'referral'            => [
        'link'    => 'Referral link',
        'total'   => 'Total rebate :amount (:total times), you can apply for cash withdrawal when it reaches :money.',
        'logs'    => 'Commission records',
        'failed'  => 'Application failed',
        'success' => 'Application success',
        'msg'     => [
            'account'     => 'Account has expired, please purchase to active service first',
            'applied'     => 'Application already exists, please wait for the previous application to be processed',
            'unfulfilled' => 'A minimal amount to created application is :amount',
            'wait'        => 'Please wait for the administrator to review',
            'error'       => 'Rebate order creation failed, please try later or notify the administrator',
        ],
    ],
    'inviter'             => 'Inviter',
    'invitee'             => 'Invitee',
    'registered_at'       => 'Registration at',
    'bought_at'           => 'Purchased at',
    'payment_method'      => 'Payment method',
    'pay'                 => 'Pay',
    'input_coupon'        => 'Please enter the gift code',
    'recharge'            => 'Pay',
    'recharge_credit'     => 'Add Funds',
    'recharging'          => 'Paying...',
    'withdraw_commission' => 'Withdraw Commission',
    'withdraw_at'         => 'Withdraw Date',
    'withdraw_logs'       => 'Withdrawal records',
    'withdraw'            => 'Withdraw',
    'scan_qrcode'         => 'Please scan the QR code',
    'shop'                => [
        'hot'                => 'HOT',
        'limited'            => 'LIMIT',
        'change_amount'      => 'Amount',
        'change_amount_help' => 'Please enter a recharge amount',
        'buy'                => 'Purchase',
        'description'        => 'Description',
        'service'            => 'Service',
        'pay_credit'         => 'Pay By Credit',
        'pay_online'         => 'Pay By Online payment',
        'price'              => 'Price',
        'quantity'           => 'Quantity',
        'subtotal'           => 'Subtotal',
        'total'              => 'Total',
        'conflict'           => 'Service Conflict',
        'conflict_tips'      => '<p>Current order will be set as <code>Prepaid order</code>.<p><ol class="text-left"><li> Prepaid order will be activated after current service expired!</li><li> Your also can activate the order manually</li></ol>',
        'call4help'          => 'Please create a ticket to ask customer service',
    ],
    'service'             => [
        'node_count'    => 'Include <code>:num</code> Nodes',
        'country_count' => 'Covered <code>:num</code> Countries or Areas',
        'unlimited'     => 'Unlimited Speed',
    ],
    'payment'             => [
        'error'           => 'The recharge balance is not compliant',
        'creating'        => 'Creating payment order...',
        'redirect_stripe' => 'Redirect to Stripe',
        'qrcode_tips'     => 'Please using <strong class="red-600">:software</strong> to scan QrCode',
        'close_tips'      => 'Please complete payment in <code>:minutes minutes</code>, otherwise it will be auto-closed by system',
        'mobile_tips'     => '<strong>Mobile User</strong>: Press QrCode image for a short amount of time -> Save Images -> Open payment software -> Scan it',
    ],
    'invoice'             => [
        'attribute'               => 'Order',
        'detail'                  => 'Order Detail',
        'amount'                  => 'Amount',
        'active_prepaid_question' => 'Are you sure to active prepaid order?',
        'active_prepaid_tips'     => 'After active: <br>Current order will be set to  Expired! <br>  Expired dates will be recalculated!',
    ],
    'node'                => [
        'info'     => 'Configuration information',
        'setting'  => 'Proxy settings',
        'unstable' => 'Node fluctuation/under maintenance',
        'rate'     => ':ratio time data consumption',
    ],
    'subscribe'           => [
        'baned'            => 'Your subscription function is disabled, please contact the administrator to restore',
        'link'             => 'Subscription Link',
        'tips'             => 'Warning: Subscribe Link is for personal used only, Please do not show to anyone else. Otherwise, they may use your service without your permission',
        'exchange_warning' => 'Exchange Link:\n1. Old Link will be disabled\n2. Proxy connection password will be reset',
        'custom'           => 'Custom Subscribe',
        'ss_only'          => 'Subscribe SS Only',
        'ssr_only'         => 'Subscribe SS/SSR Only',
        'v2ray_only'       => 'Subscribe V2Ray Only',
        'trojan_only'      => 'Subscribe Trojan Only',
        'error'            => 'Exchange Link Error',
    ],
    'ticket'              => [
        'attribute'           => 'Ticket',
        'submit_tips'         => 'Submit Ticket?',
        'reply_confirm'       => 'Reply Ticket?',
        'close_tips'          => 'Are you sure to close this ticket?',
        'close'               => 'Close Ticket',
        'failed_closed'       => 'Error: Ticket has been closed',
        'reply_placeholder'   => 'Say something',
        'reply'               => 'Reply',
        'close_msg'           => 'Ticket #:id has been closed by user',
        'title_placeholder'   => 'Please describe your questions in short term',
        'content_placeholder' => 'Please describe in detail the problems you have encountered or where we need our help so that we can help you quickly',
        'new'                 => 'Create Ticket',
        'working_hour'        => 'Customer Service',
        'online_hour'         => 'Working Hours',
        'service_tips'        => 'We have different channels to contact, please choose <code> ONE </code> of them！ <br> Duplicate requests cause further service delays',
        'error'               => 'Error! Please contact Customer Service',
    ],
    'traffic_logs'        => [
        '24hours' => 'Today\'s usage',
        '30days'  => 'Daily Traffic Usage',
        'tips'    => 'Tip: Traffic logs are updated with delays!',
    ],
    'client'              => 'Client ',
    'tutorials'           => 'Tutorials',
    'current_role'        => 'Current Role as',
    'knowledge'           => [
        'title' => 'Knowledge Base',
        'basic' => 'Basic',
    ],
];
