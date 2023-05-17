<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::TABLE('`pendidikans')->insert([
            'nama' => 'Nabila',
            'alamat' => 'Jakarta',
            'notelp' => '089998892726',
        ]);
    }
}
