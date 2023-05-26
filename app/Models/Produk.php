<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table='product';
    protected $fillable = [
        'Product_name',
        'id_produk',
        'Product_code',
        'Price'

    ];
    static function detail_produk($id_produk){
        $data=Produk::where("id_produk",$id_produk)->first();
        return $data;
        }
}
