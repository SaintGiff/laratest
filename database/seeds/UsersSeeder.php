<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert(array(
           array('name'=>'First','email'=>'git@mcclainconcepts.com','password'=>bcrypt('LaravelTestPW')),
           array('name'=>'Second','email'=>'your@emailaddress.com','password'=>bcrypt('LaravelTestPW')),
    }
}
