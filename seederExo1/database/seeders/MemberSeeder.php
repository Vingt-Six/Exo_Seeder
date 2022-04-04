<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'nom' => 'Isma',
                'age' => 22,
                'email' => 'isma@gmail.com',
                'telephone' => '0498707095'
            ],
            [
                'nom' => 'Alixe',
                'age' => 25,
                'email' => 'alixe@gmail.com',
                'telephone' => '0498769857'
            ],
            [
                'nom' => 'Hedi',
                'age' => 22,
                'email' => 'hedi@gmail.com',
                'telephone' => '0498764457'
            ],
            [
                'nom' => 'Johan',
                'age' => 19,
                'email' => 'johan@gmail.com',
                'telephone' => '0498769839'
            ]
        ]);
    }
}
