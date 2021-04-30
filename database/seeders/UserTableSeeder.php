<?php

namespace Database\Seeders;

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
        User::create([
            'name'=>'admin',
            'email' =>'admin@gmail.com',
            'address'=>'Uttara',
            'contact'=> '0178273898',
            'password'=>bcrypt('123456'),
             'role'=>'admin'
         ]);
    }
}
