<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\User();
        $user->name = 'admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach(1); //admin

        $user = new \App\Models\User();
        $user->name = 'user';
        $user->email = 'user@example.com';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach(2); //uzytkownik

        $user = new \App\Models\User();
        $user->name = 'trener';
        $user->email = 'trener@example.com';
        $user->password = bcrypt('trener');
        $user->save();
        $user->roles()->attach(3); //trener

        $user = new \App\Models\User();
        $user->name = 'pracownik';
        $user->email = 'pracownik@example.com';
        $user->password = bcrypt('pracownik');
        $user->save();
        $user->roles()->attach(4); //pracownik

        $user = new \App\Models\User();
        $user->name = 'dietetyk';
        $user->email = 'dietetyk@example.com';
        $user->password = bcrypt('dietetyk');
        $user->save();
        $user->roles()->attach(5); //dietetyk
    }
}
