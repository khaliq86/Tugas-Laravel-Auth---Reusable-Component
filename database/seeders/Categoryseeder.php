<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'category_name' => 'Web Development',
                'description' => 'Web Development',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',

            ],
            [
                'category_name' => 'Mobile Development',
                'description' => 'Mobile Development',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'category_name' => 'Desktop Development',
                'description' => 'Desktop Development',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'category_name' => 'Data Science',
                'description' => 'Data Science',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ]

        ];

        DB::table('categories')->insert($category);
    }
}