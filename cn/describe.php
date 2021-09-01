<?php
use App\Models\Payment;
use App\Models\Gather;
use App\Models\Message;
use App\Models\Coupon;
use App\Models\MailSettingAction;
use App\Models\RefundNote;

return [
    //支付名称
    'payment_name' => [
        Payment::WX => '微信支付',
        Payment::OFFLINE => '货到付款',
        Payment::ALIPAY => '支付宝支付',
        Payment::BALANCE => '帐号余额支付',
        Payment::IDEAL => 'iDeal支付',
        Payment::BANCONTACT => 'Bancontact',
        Payment::APPLEPAY => 'Apple Pay',
        Payment::PAYPAL => 'PayPal',
        Payment::SOFORT => 'SOFORT Banking',
        Payment::CREDITCARD => '信用卡支付'
    ],
    'gather_status_name' => [
        Gather::ORDER_STATUS_WAIT_BUYER_PAY => '待支付',
        Gather::ORDER_STATUS_WAIT_APPOINTMENT => '待预约',
        Gather::ORDER_STATUS_WAIT_PICKUP_GOODS => '待配货',
        Gather::ORDER_STATUS_PICKUP_GOODS => '配货中',
        Gather::ORDER_STATUS_WAIT_SELLER_SEND_GOODS => '待发货',
        Gather::ORDER_STATUS_WAIT_BUYER_CONFIRM_GOODS => '派送中',
        Gather::ORDER_STATUS_TRADE_BUYER_SIGNED => '已签收',
        Gather::ORDER_STATUS_TRADE_CANCELLED => '交易已取消',
        Gather::ORDER_STATUS_TRADE_FINISHED => '交易成功',
        Gather::ORDER_STATUS_REFUND_PROCESS => '退款中',
        Gather::ORDER_STATUS_TRADE_REFUND => '退款成功',
        Gather::STATUS_PICK_PACKAGE => '待取件',
        Gather::STATUS_PICK_PACKAGE_SUCCEED => '取件完成',
        Gather::STATUS_DISPATCHING_PACKAGE => '派送中(中国)',
        Gather::STATUS_SUCCEED_PACKAGE => '已签收(中国)'
    ],
    'message_type_name' => [
        Message::SYSTEM_MESSAGE => '系统消息',
        Message::LOGISTICS_MESSAGE => '物流消息',
        Message::ORDER_MESSAGE => '下单消息',
        Message::CART_MESSAGE => '购物车消息',
        Message::SHOP_MESSAGE => '商家消息',
        Message::SERVICE_MESSAGE => '客服消息',
        Message::APP_MESSAGE => '推送消息'
    ],
    'coupon_correlation_name' => [
        Coupon::COUPON_TYPE_ARRIVE => [
            0 => '全部分类',
            1 => '部分分类'
        ],
        Coupon::COUPON_TYPE_DISCOUNT => [
            0 => '全部分类',
            1 => '部分分类'
        ],
        Coupon::COUPON_TYPE_EXPRESS => [
            0 => '全部分类',
            1 => '部分分类'
        ],
        Coupon::COUPON_TYPE_GOODS_ARRIVE => [
            0 => '全部商品',
            1 => '部分商品'
        ],
        Coupon::COUPON_TYPE_GOODS_DISCOUNT => [
            0 => '全部商品',
            1 => '部分商品'
        ],
        Coupon::COUPON_TYPE_GOODS_EXPRESS => [
            0 => '全部商品',
            1 => '部分商品'
        ]
    ],
    'mail_setting_action_type' => [
        MailSettingAction::TMS_APPOINTMENT_ACTION => 'tms预约邮件',
        MailSettingAction::POSTNL_APPOINTMENT_ACTION => 'postnl预约邮件',
        MailSettingAction::REGISTER_ACTION => '注册邮件',
        MailSettingAction::RESET_PASSWORD_ACTION => '忘记密码邮件',
        MailSettingAction::EX_WAREHOUSE_ACTION => '出库邮件',
        MailSettingAction::REJECT_ORDER_ACTION => '拒收邮件',
        MailSettingAction::SIGN_ORDER_ACTION => '签收邮件',
        MailSettingAction::REFUND_ACTION => '退款邮件',
        MailSettingAction::USER_MESSAGE_ACTION => '用户消息邮件',
        MailSettingAction::REPLENISH_ACTION => '补货邮件',
    ],
    'refund_category_parent' => [
        RefundNote::REFUND_CATEGORY_GOODS => [
            'name' => '产品问题',
            'data' => [
                RefundNote::REFUND_CATEGORY_A => '不新鲜',
                RefundNote::REFUND_CATEGORY_B => '腐烂',
                RefundNote::REFUND_CATEGORY_GOODS_A => '过期',
                RefundNote::REFUND_CATEGORY_GOODS_B => '包装破损',
                RefundNote::REFUND_CATEGORY_C => '商品破损',
                RefundNote::REFUND_CATEGORY_E => '重量不足',
                RefundNote::REFUND_CATEGORY_D => '实物与下单信息不符',
            ]
        ],
        RefundNote::REFUND_CATEGORY_WMS => [
            'name' => '配货问题',
            'data' => [
                RefundNote::REFUND_CATEGORY_G => '仓库错配',
                RefundNote::REFUND_CATEGORY_F => '仓库漏配',
                RefundNote::REFUND_CATEGORY_WMS_A => '仓库换货'
            ]
        ],
        RefundNote::REFUND_CATEGORY_TMS => [
            'name' => '物流派送',
            'data' => [
                RefundNote::REFUND_CATEGORY_TMS_A => '司机漏给',
                RefundNote::REFUND_CATEGORY_K => '司机送错',
                RefundNote::REFUND_CATEGORY_TMS_B => '客户签收时间冲突',
                RefundNote::REFUND_CATEGORY_TMS_C => '派送时间过长'
            ]
        ],
        RefundNote::REFUND_CATEGORY_USER => [
            'name' => '顾客客观原因',
            'data' => [
                RefundNote::REFUND_CATEGORY_I => '买错',
                RefundNote::REFUND_CATEGORY_J => '取消',
                RefundNote::REFUND_CATEGORY_USER_A => '重新下单'
            ]
        ],
        RefundNote::REFUND_CATEGORY_STOCK => [
            'name' => '系统原因',
            'data' => [
                RefundNote::REFUND_CATEGORY_H => '系统缺货',
                RefundNote::REFUND_CATEGORY_STOCK_A => '设置问题'
            ]
        ]
    ],
    'refund_category' => [
        RefundNote::REFUND_CATEGORY_A => '不新鲜',
        RefundNote::REFUND_CATEGORY_B => '腐烂',
        RefundNote::REFUND_CATEGORY_GOODS_A => '过期',
        RefundNote::REFUND_CATEGORY_GOODS_B => '包装破损',
        RefundNote::REFUND_CATEGORY_C => '商品破损',
        RefundNote::REFUND_CATEGORY_E => '重量不足',
        RefundNote::REFUND_CATEGORY_D => '实物与下单信息不符',
        RefundNote::REFUND_CATEGORY_G => '仓库错配',
        RefundNote::REFUND_CATEGORY_F => '仓库漏配',
        RefundNote::REFUND_CATEGORY_WMS_A => '仓库换货',
        RefundNote::REFUND_CATEGORY_TMS_A => '司机漏给',
        RefundNote::REFUND_CATEGORY_K => '司机送错',
        RefundNote::REFUND_CATEGORY_TMS_B => '客户签收时间冲突',
        RefundNote::REFUND_CATEGORY_TMS_C => '派送时间过长',
        RefundNote::REFUND_CATEGORY_I => '买错',
        RefundNote::REFUND_CATEGORY_J => '取消',
        RefundNote::REFUND_CATEGORY_USER_A => '重新下单',
        RefundNote::REFUND_CATEGORY_H => '系统缺货',
        RefundNote::REFUND_CATEGORY_STOCK_A => '设置问题'
    ],
    'refund_attributes' => [
        RefundNote::REFUND_ATTRIBUTES_A => '风房',
        RefundNote::REFUND_ATTRIBUTES_B => '干货',
        RefundNote::REFUND_ATTRIBUTES_C => '冻品',
        RefundNote::REFUND_ATTRIBUTES_D => '预售',
    ]
];