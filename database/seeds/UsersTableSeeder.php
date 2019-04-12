<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
            'name'=> 'Unknown Author',
            'email'=>'authorghjhg@mail.com',
            'password'=>bcrypt(\Illuminate\Support\Str::random(16)),
        ],
        [
            'name'=> 'Author',
            'email'=>'authg@mail.com',
            'password'=>bcrypt(\Illuminate\Support\Str::random(311293)),
        ]
        ];


        \Illuminate\Support\Facades\DB::table('users')->insert($data);
    }
}
