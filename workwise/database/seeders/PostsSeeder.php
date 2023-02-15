<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postInsert = [

            ['id' => 1, 'user_id' => 2, 'job_type' => 'Dev',  'job_timing' => 'fullTime',   'country' => 'Karachi',  'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'user_id' => 2, 'job_type' => 'Dev', 'job_timing' => 'fullTime',  'country' => 'Karachi', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        DB::table('posts')->insert($postInsert);
    }
}
