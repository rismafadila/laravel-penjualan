<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $visible =['nama','id_suplier','harga','stok', 'cover'];
    protected $fillable =['nama','id_suplier','harga','stok', 'cover'];
    public $timestamps = true;

    public function suplier(){
        //data dari model "Book" bisa dimiliki oleh model "author"
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Suplier','id_suplier');

    }
    public function transaksi(){
        //data dari model "Book" bisa dimiliki oleh model "author"
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Transaksi','id_barang');

    }
    public function image()
    {
        if ($this->cover && file_exists(public_path('image/barang/' . $this->cover))) {
            return asset('image/barang/' . $this->cover);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('image/barang/' . $this->cover))) {
            return unlink(public_path('image/barang/' . $this->cover));
        }

    }
}
