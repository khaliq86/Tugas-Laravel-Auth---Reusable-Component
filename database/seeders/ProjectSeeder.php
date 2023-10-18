<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = [
            [
                'project_name' => 'Jikan API',
                'description' => 'Jikan API 4.0',
                'id_category' => '2',
                'id_tag' => '5',
                'id_user' => '2',
                'start_date' => '2021-01-01 00:00:00',
                'end_date' => '2021-01-01 00:00:00',
                'status' => 'On Progress',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'project_name' => 'Web Dukung Karya',
                'description' => 'Web Dukung Karya Untuk UMKM Indonesia',
                'id_category' => '1',
                'id_tag' => '2',
                'id_user' => '3',
                'start_date' => '2021-01-01 00:00:00',
                'end_date' => '2021-01-01 00:00:00',
                'status' => 'On Progress',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'project_name' => 'Web Penghitung Data',
                'description' => 'Web Untuk menghitung data secara realtime',
                'id_category' => '4',
                'id_tag' => '3',
                'id_user' => '4',
                'start_date' => '2021-01-01 00:00:00',
                'end_date' => '2021-01-01 00:00:00',
                'status' => 'Due Soon',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ]
        ];

        DB::table('projects')->insert($project);
    }
}