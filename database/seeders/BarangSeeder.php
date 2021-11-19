<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\Suplier;
use App\Models\Transaksi;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample suplier
        $Suplier1 = Suplier::create(['nama'=>'Risma Septiani Fadila','alamat'=>'jl.ciparay tengah']);
        $Suplier2 = Suplier::create(['nama'=>'Kayla Rahmanisa','alamat'=>'jl.sudirja']);
        $Suplier3 = Suplier::create(['nama'=>'Fitra Nur Rahmalia','alamat'=>'jl.cibaduyut']);

        //membuat sample barang
        $Barang1 = Barang::create(['nama'=>'Kulot','harga'=>'10000','stok'=>3,'id_suplier'=>$Suplier1->id]);
        $Barang2 = Barang::create(['nama'=>'Jogger','harga'=>'20000','stok'=>2,'id_suplier'=>$Suplier2->id]);
        $Barang3 = Barang::create(['nama'=>'Jeans','harga'=>'30000','stok'=>3,'id_suplier'=>$Suplier3->id]);

        //membuat sample transaksi
        $Transaksi1 = Transaksi::create(['id_barang'=>$Barang1->id,'jumlah'=>3,'bayar'=>'30000']);
        $Transaksi2 = Transaksi::create(['id_barang'=>$Barang2->id,'jumlah'=>2,'bayar'=>'30000']);
        $Transaksi3 = Transaksi::create(['id_barang'=>$Barang3->id,'jumlah'=>3,'bayar'=>'30000']);
    }
}
