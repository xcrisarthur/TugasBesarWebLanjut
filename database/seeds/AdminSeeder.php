<?php

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::create([
            'name' => 'Administrator',
            'email' => 'informatika@gmail.com',
            'password' => Hash::make('qweasdzxc'),
            'address' => 'Buntut Bali',
        ]);
    }
}
