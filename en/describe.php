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
        Payment::WX => 'Wechat',
        Payment::OFFLINE => '货到付款',
        Payment::ALIPAY => 'Alipay',
        Payment::BALANCE => 'balance',
        Payment::IDEAL => 'iDEAL',
        Payment::BANCONTACT => 'Bancontact',
        Payment::APPLEPAY => 'Apple Pay',
        Payment::PAYPAL => 'Pay Pal',
        Payment::SOFORT => 'SOFORT Banking',
        Payment::CREDITCARD => 'Credit Card'
    ],
    'gather_status_name' => [
        Gather::ORDER_STATUS_WAIT_BUYER_PAY => 'Unpaid',
        Gather::ORDER_STATUS_WAIT_APPOINTMENT => 'Unreserved',
        Gather::ORDER_STATUS_WAIT_PICKUP_GOODS => 'To be picked',
        Gather::ORDER_STATUS_PICKUP_GOODS => 'Picking',
        Gather::ORDER_STATUS_WAIT_SELLER_SEND_GOODS => 'To be delivered',
        Gather::ORDER_STATUS_WAIT_BUYER_CONFIRM_GOODS => 'Delivering',
        Gather::ORDER_STATUS_TRADE_BUYER_SIGNED => 'Received',
        Gather::ORDER_STATUS_TRADE_CANCELLED => 'Transaction Cancelled',
        Gather::ORDER_STATUS_TRADE_FINISHED => 'Transaction Successful',
        Gather::ORDER_STATUS_REFUND_PROCESS => 'Request for Refund',
        Gather::ORDER_STATUS_TRADE_REFUND => 'Refund Successful',
        Gather::STATUS_PICK_PACKAGE => 'Pending to pickup',
        Gather::STATUS_PICK_PACKAGE_SUCCEED => 'Picked by NLExpress',
        Gather::STATUS_DISPATCHING_PACKAGE => 'On road(CN)',
        Gather::STATUS_SUCCEED_PACKAGE => 'Delivered(CN)'
    ],
    'message_type_name' => [
        Message::SYSTEM_MESSAGE => 'System message',
        Message::LOGISTICS_MESSAGE => 'Deliver message',
        Message::ORDER_MESSAGE => 'Order message',
        Message::CART_MESSAGE => 'Cart message',
        Message::SHOP_MESSAGE => 'Merchant message',
        Message::SERVICE_MESSAGE => 'Customer service message',
        Message::APP_MESSAGE => 'Push Message'
    ],
    'coupon_correlation_name' => [
        Coupon::COUPON_TYPE_ARRIVE => [
            false => 'All categories',
            true => 'Partial classification'
        ],
        Coupon::COUPON_TYPE_DISCOUNT => [
            false => 'All categories',
            true => 'Partial classification'
        ],
        Coupon::COUPON_TYPE_EXPRESS => [
            false => 'All categories',
            true => 'Partial classification'
        ],
        Coupon::COUPON_TYPE_GOODS_ARRIVE => [
            false => 'All goods',
            true => 'Partial goods'
        ],
        Coupon::COUPON_TYPE_GOODS_DISCOUNT => [
            false => 'All goods',
            true => 'Partial goods'
        ],
        Coupon::COUPON_TYPE_GOODS_EXPRESS => [
            false => 'All goods',
            true => 'Partial goods'
        ]
    ],
    'mail_setting_action_type' => [
        MailSettingAction::TMS_APPOINTMENT_ACTION => 'tms appointment emails',
        MailSettingAction::POSTNL_APPOINTMENT_ACTION => 'postnl appointment emails',
        MailSettingAction::REGISTER_ACTION => 'register emails',
        MailSettingAction::RESET_PASSWORD_ACTION => 'reset password emails',
        MailSettingAction::EX_WAREHOUSE_ACTION => 'ex warehouse emails',
        MailSettingAction::REJECT_ORDER_ACTION => 'reject order emails',
        MailSettingAction::SIGN_ORDER_ACTION => 'sign order emails',
        MailSettingAction::REFUND_ACTION => 'refund emails',
        MailSettingAction::USER_MESSAGE_ACTION => 'user message emails',
        MailSettingAction::REPLENISH_ACTION => 'replenish emails',
    ],
    'refund_category_parent' => [
        RefundNote::REFUND_CATEGORY_GOODS => [
            'name' => 'Product Problems',
            'data' => [
                RefundNote::REFUND_CATEGORY_A => 'Not Fresh',
                RefundNote::REFUND_CATEGORY_B => 'Rotten',
                RefundNote::REFUND_CATEGORY_GOODS_A => 'Expired',
                RefundNote::REFUND_CATEGORY_GOODS_B => 'Damaged packaging',
                RefundNote::REFUND_CATEGORY_C => 'Damaged goods',
                RefundNote::REFUND_CATEGORY_E => 'Underweight',
                RefundNote::REFUND_CATEGORY_D => 'The actual product does not match the order information.',
            ]
        ],
        RefundNote::REFUND_CATEGORY_WMS => [
            'name' => 'Distribution Problems',
            'data' => [
                RefundNote::REFUND_CATEGORY_G => 'Warehouse mismatch',
                RefundNote::REFUND_CATEGORY_F => 'Warehouse omission',
                RefundNote::REFUND_CATEGORY_WMS_A => 'Exchange of goods at the warehouse'
            ]
        ],
        RefundNote::REFUND_CATEGORY_TMS => [
            'name' => 'Logistics Delivery',
            'data' => [
                RefundNote::REFUND_CATEGORY_TMS_A => 'Missed delivery by driver',
                RefundNote::REFUND_CATEGORY_K => 'Wrong delivery by driver',
                RefundNote::REFUND_CATEGORY_TMS_B => 'Customer sign-off time conflit',
                RefundNote::REFUND_CATEGORY_TMS_C => 'Excessive Delivery Time'
            ]
        ],
        RefundNote::REFUND_CATEGORY_USER => [
            'name' => 'Objective Customer Reasons',
            'data' => [
                RefundNote::REFUND_CATEGORY_I => 'Wrong purchase',
                RefundNote::REFUND_CATEGORY_J => 'Cancel',
                RefundNote::REFUND_CATEGORY_USER_A => 'Re-order'
            ]
        ],
        RefundNote::REFUND_CATEGORY_STOCK => [
            'name' => 'System reason',
            'data' => [
                RefundNote::REFUND_CATEGORY_H => 'Out of stock',
                RefundNote::REFUND_CATEGORY_STOCK_A => 'Setup issues'
            ]
        ]
    ],
    'refund_category' => [
        RefundNote::REFUND_CATEGORY_A => 'Not Fresh',
        RefundNote::REFUND_CATEGORY_B => 'Rotten',
        RefundNote::REFUND_CATEGORY_GOODS_A => 'Expired',
        RefundNote::REFUND_CATEGORY_GOODS_B => 'Damaged packaging',
        RefundNote::REFUND_CATEGORY_C => 'Damaged goods',
        RefundNote::REFUND_CATEGORY_E => 'Underweight',
        RefundNote::REFUND_CATEGORY_D => 'The actual product does not match the order information.',
        RefundNote::REFUND_CATEGORY_G => 'Warehouse mismatch',
        RefundNote::REFUND_CATEGORY_F => 'Warehouse omission',
        RefundNote::REFUND_CATEGORY_WMS_A => 'Exchange of goods at the warehouse',
        RefundNote::REFUND_CATEGORY_TMS_A => 'Missed delivery by driver',
        RefundNote::REFUND_CATEGORY_K => 'Wrong delivery by driver',
        RefundNote::REFUND_CATEGORY_TMS_B => 'Customer sign-off time conflit',
        RefundNote::REFUND_CATEGORY_TMS_C => 'Excessive Delivery Time',
        RefundNote::REFUND_CATEGORY_I => 'Wrong purchase',
        RefundNote::REFUND_CATEGORY_J => 'Cancel',
        RefundNote::REFUND_CATEGORY_USER_A => 'Re-order',
        RefundNote::REFUND_CATEGORY_H => 'Out of stock',
        RefundNote::REFUND_CATEGORY_STOCK_A => 'Setup issues'
    ],
    'refund_attributes' => [
        RefundNote::REFUND_ATTRIBUTES_A => 'Fresh goods',
        RefundNote::REFUND_ATTRIBUTES_B => 'Dry goods',
        RefundNote::REFUND_ATTRIBUTES_C => 'Frozen goods',
        RefundNote::REFUND_ATTRIBUTES_D => 'Pre-sell',
    ]
];