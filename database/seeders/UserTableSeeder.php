<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = User::create([
            'name' => 'Anas',
            'email' => 'muhamadanasmustopa1112@gmail.com',
            'password' => bcrypt('@nasFebrian1')
        ]);
        $admin->assignRole('admin');
    }
}
