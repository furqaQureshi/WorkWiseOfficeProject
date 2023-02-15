<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insertUser = [

            ['id' => 1, 'name' => 'Furqan', 'password' => Hash::make(123), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'name' => 'Asim', 'password' => Hash::make(123), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        DB::table('users')->insert($insertUser);
    }
}
