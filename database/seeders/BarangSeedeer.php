<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brg1 = new Barang();
        $brg1->nama = "Sepatu";
        $brg1->harga = "100000";
        $brg1->save();

        $brg2 = new Barang();
        $brg2->nama = "Baju";
        $brg2->harga = "50000";
        $brg2->save();
    }
}
