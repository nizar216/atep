<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $orders = [
            [
                "basket_id" => 1,
                "user_id" => 1,
                "status" => "Your order has been received",
                "order_no" => 1111,
                "name" => "Admin",
                "address" => "Admin Address",
                "phone" => 12345,
                "installments" => 1,
                "token" => "token_no_12345"
            ],
            [
                "basket_id" => 2,
                "user_id" => 2,
                "status" => "Your order has been received",
                "order_no" => 2222,
                "name" => "User",
                "address" => "User Address",
                "phone" => 1234,
                "installments" => 1,
                "token" => "token_no_1234"
            ],
        ];

        foreach($orders as $order){
            Order::create($order);
        }






    }
}
