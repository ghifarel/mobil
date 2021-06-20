@extends('template')

@section('isi halaman')
<br>
<br>
<br>
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Inventory Lexus</h3>
            <a href="{{route('mobil.create')}}">Tambah Data Mobil</a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Kode Produk</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>AKSI</th>
                </tr>
                @foreach ( as )
                <tr>
                    <td>{{$product->kode_produk}}</td>
                    <td>{{$product->nama}}</td>
                    <td>{{$product->deskripsi}}</td>
                    <td>
                        <input type="button" value="Edit" class="btn btn-warning">
                        <input type="button" value="Delete" class="btn btn-danger">
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection