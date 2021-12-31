<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Teacher;
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
       $user = User::create([
           'name' => "Admin",
           'email' => 'admin@admin.com',
           'password' => Hash::make('12345678'),
       ]);

       Admin::create(['user_id' => $user->id]);

    }
}
