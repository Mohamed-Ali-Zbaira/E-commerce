<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  DB::table ('users')->insert( 
     [
        'name' => 'Admin',
        'email'=>'admin@gmail.com',
        'role' => 'admin',
        'password' => hash::make('123456789'),
     ]
      );
    }
}
