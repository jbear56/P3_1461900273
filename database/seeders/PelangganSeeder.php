<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plg1 = new Pelanggan();
        $plg1->nama = "Ade";
        $plg1->alamat = "Surabaya";
        $plg1->save();

        $plg2 = new Pelanggan();
        $plg2->nama = "Zam";
        $plg2->alamat = "Kalimantan";
        $plg2->save();

        $plg3 = new Pelanggan();
        $plg3->nama = "Arif";
        $plg3->alamat = "Sidoarjo";
        $plg3->save();
    }
}