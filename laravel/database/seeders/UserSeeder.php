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
        \App\Models\User::factory(10)->create();

        User::create([
            'name'=> 'Test',
            'email'=> 'test@gmail.com',
            'email_verified_at'=>now(),
            'password' =>Hash::make('test'),
        ]);
    }
}
