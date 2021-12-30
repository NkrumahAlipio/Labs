<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::create([
           'name' => "Nkrumah Alípio",
           'email' => 'nkrumah2000@gmail.com',
           'password' => Hash::make('ronaldinho'),
           'group_id' => 1
       ]);
    }
}
