<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\Suplier;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample penulis
        $Suplier1 = Suplier::create(['nama'=>'Risma Septiani Fadila']);
        $Suplier2 = Suplier::create(['nama'=>'Tiara Novita Sari']);
        $Suplier3 = Suplier::create(['nama'=>'Syifa Siti Khumairah']);

        //membuat sample buku
        $Barang1 = Barang::create(['nama'=>'Kulot','harga'=>'10000','stok'=>3,'id_suplier'=>$Suplier1->id]);
        $Barang2 = Barang::create(['nama'=>'Jogger','harga'=>'20000','stok'=>2,'id_suplier'=>$Suplier2->id]);
        $Barang3 = Barang::create(['nama'=>'Jeans','harga'=>'30000','stok'=>3,'id_suplier'=>$Suplier3->id]);
    }
}
