<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'message' => Str::random(10),
            'phone' => Str::random(11)
        ];

        DB::table('users')->insert($data);
    }
}
