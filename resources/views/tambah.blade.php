@extends('template')

@section('isi halaman')
<br>
<br>
<br>
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h3>Tambah Mobil</h3>
            <form action="{{route('mobil.store')}}" method="POST">
                <ul class="list-group">
                    Kode Produk <input type="text" name="kode produk" required>
                    Nama <input type="text" name="nama" required>
                    Gambar <input type="text" name="desc" required>
                </ul>
                <hr>
                <a href="{{route('mobil.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection