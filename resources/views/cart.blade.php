@extends('template')
@section('konten')
@if (empty($cart)|| count($cart)==0)
tidak ada produk di cart
@else
<table class="table table-striped">
        <thead>
            <tr>
                <td>#</td>
                <td>Nama Produk</td>
                <td>Harga</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ( $cart as $ct=>$val )
            <tr>
                <td>{{++$i}}</td>
                <td>{{$val['nama_produk']}}</td>
                <td>{{$val['harga']}}</td>

            </tr>
            @endforeach

        </tbody>
    </table>
@endif
@endsection

