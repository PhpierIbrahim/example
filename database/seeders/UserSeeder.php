<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $user = new User;
        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->password = bcrypt(12345678);
        $user->save();

    }
}
