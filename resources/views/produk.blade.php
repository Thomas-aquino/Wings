@extends('template')
@section('konten')
<div class="container">

    <table class="table table-striped">
        <thead>
            <tr>
                <td>#</td>
                <td>Kode Produk</td>
                <td>Nama Produk</td>
                <td>Harga</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ( $data as $data )
            <tr>
                <td>{{++$i}}</td>
                <td>{{$data->Product_code}}</td>
                <td>{{$data->Product_name}}</td>
                <td>{{$data->Price}}</td>
                <td>
                    <a href="{{url('produk/tambah/'.$data->id_produk )}}" type="button" class="btn btn-sm btn-primary">BUY</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>
@endsection
