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
        $Transaksi1 = Transaksi::create(['kode'=>'Atasan','id_barang'=>$Barang1->id,'harga'=>'30000','qty'=>'3','tanggal'=>'2021-10-13']);
        $Transaksi2 = Transaksi::create(['kode'=>'Atasan','id_barang'=>$Barang2->id,'harga'=>'30000','qty'=>'3','tanggal'=>'2021-10-13']);
        $Transaksi3 = Transaksi::create(['kode'=>'Atasan','id_barang'=>$Barang3->id,'harga'=>'30000','qty'=>'3','tanggal'=>'2021-10-13' ]);
    }
}
