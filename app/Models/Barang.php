<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $visible =['nama','id_suplier','harga','stok'];
    protected $fillable =['nama','id_suplier','harga','stok'];
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
        if ($this->cover && file_exists(public_path('images/barangs/' . $this->cover))) {
            return asset('images/barangs/' . $this->cover);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/barangs/' . $this->cover))) {
            return unlink(public_path('images/barangs/' . $this->cover));
        }

    }
}
