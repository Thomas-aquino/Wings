<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $data=Produk::all();
        return view('produk',compact('data'))->with('i');
    }
     function store($id_produk){
        $cart = Session("cart");
        $produk=Produk::detail_produk($id_produk);
        $cart["id_produk"]=[
            "nama_produk" => $produk->Product_name,
            "harga" => $produk->Price,
            "jumlah" => 1
        ];
        Session(["cart"=>$cart]);
        return redirect("/cart");
    }
function cart(){
    $cart= Session("cart");
    return view ("cart")->with("i","cart",$cart);
}

}
