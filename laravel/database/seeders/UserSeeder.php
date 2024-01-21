<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory(10)->create();

        User::create([
            'name'=> 'superadmin',
            'email'=> 'superadmin@gmail.com',
            'role'=>'superadmin',
            'email_verified_at'=>now(),
            'password' =>Hash::make('superadmin'),
        ]);

        User::create([
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'role'=>'admin',
            'email_verified_at'=>now(),
            'password' =>Hash::make('admin'),
        ]);

        User::create([
            'name'=> 'user',
            'email'=> 'user@gmail.com',
            'role'=>'user',
            'email_verified_at'=>now(),
            'password' =>Hash::make('user'),
        ]);
    }
}
