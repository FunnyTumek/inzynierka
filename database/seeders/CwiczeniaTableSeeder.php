<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CwiczeniaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cwiczenia = new \App\Models\Cwiczenia();
        $cwiczenia->nazwa = 'Martwy ciąg';
        $cwiczenia->opis = 'Cwiczenie wielostawowe';
        $cwiczenia->serie = 4;
        $cwiczenia->powtorzenia = 5;
        $cwiczenia->save();

        $cwiczenia = new \App\Models\Cwiczenia();
        $cwiczenia->nazwa = 'Pzysiad';
        $cwiczenia->opis = 'Cwiczenia na nogi';
        $cwiczenia->serie = 4;
        $cwiczenia->powtorzenia = 5;
        $cwiczenia->save();

        $cwiczenia = new \App\Models\Cwiczenia();
        $cwiczenia->nazwa = 'Wyciskanie na klate';
        $cwiczenia->opis = 'Cwiczenie na miesnie klatki piersiowej';
        $cwiczenia->serie = 4;
        $cwiczenia->powtorzenia = 5;
        $cwiczenia->save();

        $cwiczenia = new \App\Models\Cwiczenia();
        $cwiczenia->nazwa = 'Wykroki';
        $cwiczenia->opis = 'Cwiczenie na nogi';
        $cwiczenia->serie = 4;
        $cwiczenia->powtorzenia = 10;
        $cwiczenia->save();

        $cwiczenia = new \App\Models\Cwiczenia();
        $cwiczenia->nazwa = 'Brzuszki';
        $cwiczenia->opis = 'Cwiczenie na brzuch';
        $cwiczenia->serie = 4;
        $cwiczenia->powtorzenia = 12;
        $cwiczenia->save();
    }

}
