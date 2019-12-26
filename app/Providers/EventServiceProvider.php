<?php

namespace App\Providers;

use App\Events\OrderPaid;
use App\Events\OrderReviewed;
use App\Listeners\SendOrderPaidMail;
use App\Listeners\UpdateCrowdfundingProductProgress;
use App\Listeners\UpdateProductRating;
use App\Listeners\UpdateProductSoldCount;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        // 订单完成支付
        OrderPaid::class => [
            // 销量
            UpdateProductSoldCount::class,
            // 邮件
            SendOrderPaidMail::class,
            // 众筹商品
            UpdateCrowdfundingProductProgress::class,
        ],
        // 商品评价
        OrderReviewed::class => [
            // 评分计算
            UpdateProductRating::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
