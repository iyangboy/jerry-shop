<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // 用户
        $this->call(UsersSeeder::class);
        // 地址
        $this->call(UserAddressesSeeder::class);
        // 商品
        $this->call(ProductsSeeder::class);
        // 优惠券
        $this->call(CouponCodesSeeder::class);
        // 订单
        $this->call(OrdersSeeder::class);
    }
}
