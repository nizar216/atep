<?php

use App\UserDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $usersDetails = [
            ["user_id" => 1,"address" => "ADMIN ADDRESS","phone" => 12345,"city" => "ADMIN CITY","country" => "ADMIN COUNTRY","latlong"=>"10,36"],
        ["user_id" => 2,"address" => "USER ADDRESS","phone" => 1234,"city" => "USER CITY","country" => "USER COUNTRY","latlong"=>"10,36"],
        ];

        foreach($usersDetails as $userDetail){
            UserDetail::create($userDetail);
        }

    }
}
