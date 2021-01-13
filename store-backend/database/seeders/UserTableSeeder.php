<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_type' => 'administrator',
            'fullname' => 'Wicked Wicked',
            'email' => 'wicked@wicked.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password')
        ]);
    }
}
