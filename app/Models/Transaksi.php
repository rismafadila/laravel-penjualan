<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $visible =['id_barang','jumlah','bayar'];
    protected $fillable =['id_barang','jumlah','bayar'];
    public $timestamps = true;

    public function barang()
    {
        return $this->belongsTo('App\Models\Barang', 'id_barang');
    }
}
