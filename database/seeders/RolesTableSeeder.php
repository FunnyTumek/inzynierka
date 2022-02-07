<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Models\Roles();
        $role->name = 'Admin';
        $role->save();

        $role = new \App\Models\Roles();
        $role->name = 'Uzytkownik';
        $role->save();

        $role = new \App\Models\Roles();
        $role->name = 'Trener';
        $role->save();

        $role = new \App\Models\Roles();
        $role->name = 'Pracownik';
        $role->save();

        $role = new \App\Models\Roles();
        $role->name = 'Dietetyk';
        $role->save();

    }
}
