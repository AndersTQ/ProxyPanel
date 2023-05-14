<?php

return [
    'user' => [
        'id' => '用户ID',
        'attribute' => '用户',
        'nickname' => '昵称',
        'username' => '用户名',
        'password' => '密码',
        'credit' => '余额',
        'invite_num' => '可用邀请码',
        'reset_date' => '重置日',
        'port' => '端口',
        'traffic_used' => '流量使用',
        'service' => '代理',
        'group' => '分组',
        'account_status' => '账号状态',
        'proxy_status' => '代理状态',
        'expired_date' => '过期日',
        'role' => '角色权限',
        'wechat' => '微信',
        'qq' => 'QQ',
        'remark' => '备注',
        'uuid' => 'VMess UUID',
        'proxy_passwd' => '密码',
        'proxy_method' => '加密方式',
        'usable_traffic' => '可用流量',
        'proxy_protocol' => '协议',
        'proxy_obfs' => '混淆',
        'speed_limit' => '用户限速',
        'inviter' => '邀请人',
        'created_date' => '注册时间',
    ],
    'common' => [
        'extend' => '扩展',
        'sort' => '排序',
        'description' => '描述',
        'type' => '类型',
        'level' => '等级',
    ],
    'country' => [
        'code' => 'ISO国家代码',
        'icon' => '图 标',
        'name' => '国家/地区名称',
    ],
    'subscribe' => [
        'code' => '订阅码',
        'req_times' => '请求次数',
        'updated_at' => '最后请求时间',
        'ban_time' => '封禁时间',
        'ban_desc' => '封禁理由',
        'req_ip' => '请求IP',
        'req_header' => '访问',
    ],
    'oauth' => [
        'type' => '渠道',
        'identifier' => '唯一标识',
    ],
    'user_group' => [
        'attribute' => '用戶分组',
        'name' => '分组名称',
        'nodes' => '选择节点',
    ],
    'node' => [
        'attribute' => '节点',
        'id' => '节点ID',
        'name' => '名称',
        'domain' => '域名',
        'static' => '存活',
        'online_user' => '在线',
        'data_consume' => '产生流量',
        'data_rate' => '流量比例',
        'ddns' => 'DDNS',
        'ipv4' => 'IPv4地址',
        'ipv6' => 'IPv6地址',
        'push_port' => '消息推送端口',
        'rule_group' => '审计分组',
        'traffic_limit' => '节点限速',
        'client_limit' => '设备数限制',
        'label' => '标签',
        'country' => '国家/地区',
        'udp' => 'UDP',
        'display' => '显示 与 订阅',
        'detection' => '节点阻断检测',
        'method' => '加密方式',
        'protocol' => '协议',
        'protocol_param' => '协议参数',
        'obfs' => '混淆',
        'obfs_param' => '混淆参数',
        'single' => '单端口',
        'transfer' => '中 转',
        'service_port' => '服务端口',
        'single_passwd' => '[单] 密码',
        'v2_alter_id' => '额外ID',
        'v2_net' => '传输方式',
        'v2_cover' => '伪装类型',
        'v2_host' => '伪装域名',
        'v2_path' => '路径 | 密钥',
        'v2_sni' => 'SNI',
        'v2_tls' => '连接TLS',
        'v2_tls_provider' => 'TLS配置',
        'relay_port' => '中转端口',
    ],
    'node_auth' => [
        'attribute' => '节点授权',
        'key' => '通信密钥<small>节点用</small>',
        'secret' => '反向通信密钥',
    ],
    'node_cert' => [
        'attribute' => '域名证书',
        'domain' => '域名',
        'key' => 'KEY',
        'pem' => 'PEM',
        'issuer' => '签发机构',
        'signed_date' => '签发日期',
        'expired_date' => '到期时间',
    ],
    'order' => [
        'attribute' => '订单',
        'id' => '订单号',
        'original_price' => '原价',
        'price' => '实价',
        'pay_way' => '支付方式',
        'status' => '订单状态',
    ],
    'goods' => [
        'attribute' => '商品',
        'name' => '名称',
        'price' => '售价',
        'category' => '分类',
        'renew' => '流量重置价格',
        'user_limit' => '用户限速',
        'period' => '重置周期',
        'traffic' => '流量额度',
        'invite_num' => '赠送邀请码数量',
        'limit_num' => '限购数量',
        'available_date' => '有效期',
        'hot' => '热销',
        'color' => '颜色',
        'logo' => '商品图片',
        'info' => '自定义列表',
    ],
    'rule' => [
        'attribute' => '规则',
        'name' => '描述',
        'pattern' => '值',
    ],
    'rule_group' => [
        'attribute' => '规则分组',
        'name' => '分组名称',
        'type' => '审计模式',
        'rules' => '选择规则',
    ],
    'role' => [
        'attribute' => '角色',
        'name' => '名称',
        'permissions' => '权限',
    ],
    'permission' => [
        'attribute' => '权限行为',
        'description' => '行为描述',
        'name' => '路由名称',
    ],
    'article' => [
        'attribute' => '文章',
        'category' => '类别',
        'language' => '语言',
        'logo' => '头图',
        'created_at' => '发布日期',
        'updated_at' => '最后更新',
    ],
    'coupon' => [
        'attribute' => '卡券',
        'name' => '卡券名称',
        'sn' => '使用券码',
        'logo' => '卡券图片',
        'value' => '优惠额度',
        'priority' => '权重',
        'usable_times' => '使用次数',
        'minimum' => '满减条件',
        'used' => '个人限用',
        'levels' => '等级限定',
        'groups' => '分组限定',
        'users_whitelist' => '专属用户',
        'users_blacklist' => '禁用用户',
        'services_whitelist' => '许可商品',
        'services_blacklist' => '禁用商品',
        'newbie' => '新人专属',
        'num' => '数量',
    ],
    'aff' => [
        'invitee' => '消费者',
        'amount' => '消费金额',
        'commission' => '返利金额',
        'updated_at' => '处理时间',
        'created_at' => '下单时间',
    ],
    'referral' => [
        'created_at' => '申请时间',
        'user' => '申请账号',
        'amount' => '申请提现金额',
        'id' => '申请单ID',
    ],
    'notification' => [
        'address' => '收信地址',
        'created_at' => '投递时间',
        'status' => '投递状态',
    ],
    'ip' => [
        'network_type' => '通讯类型',
        'info' => '归属地',
    ],
    'user_traffic' => [
        'upload' => '上传流量',
        'download' => '下载流量',
        'total' => '总流量',
        'log_time' => '记录时间',
    ],
    'user_data_modify' => [
        'before' => '变动前流量',
        'after' => '变动后流量',
        'created_at' => '发生时间',
    ],
    'user_credit' => [
        'before' => '操作前余额',
        'after' => '操作后金额',
        'amount' => '发生金额',
        'created_at' => '发生时间',
    ],
];
