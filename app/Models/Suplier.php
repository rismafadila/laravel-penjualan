<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible =['nama'];
    //memberikan akses data apa saja yang bisa diisi
    protected $fillable =['nama'];
    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;

    public function barang(){
        //data model "Author" bisa memiliki banyak data
        $this->hasMany('App\Models\Barang','id_suplier');
    }
}
