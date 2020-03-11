<?php

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
        // $this->call(UsersTableSeeder::class);
        $user = new \App\User();
        $user->name = 'Phanthakan Phithakratsadon';//
        $user->email = 'ter0852851172@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
