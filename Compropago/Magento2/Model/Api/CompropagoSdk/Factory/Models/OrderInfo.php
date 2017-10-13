<?php

namespace Compropago\Magento2\Model\Api\CompropagoSdk\Factory\Models;


class OrderInfo
{
    public $order_id;
    public $order_name;
    public $order_price;
    public $payment_method;
    public $store;
    public $country;
    public $image_url;
    public $success_url;
    public $failed_url;
    public $exchage;

    public function __construct()
    {
        $this->exchage = new Exchange();
    }
}