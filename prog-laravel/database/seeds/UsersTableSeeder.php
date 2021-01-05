<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        factory(User::class, 1)->create([
            "email" => "admin@gmail.com",
        ]);
        
        factory(User::class, 19)->create();
    }
}