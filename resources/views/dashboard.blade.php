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
                    <th>Brand</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>AKSI</th>
                </tr>
                <tr>
                    <td>Lexus LM 350 4 Seater</td>
                    <td>3.500.000.000</td>
                    <td>lm350.png</td>
                    <td>
                        <input type="button" value="Edit" class="btn btn-warning">
                        <input type="button" value="Delete" class="btn btn-danger">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection