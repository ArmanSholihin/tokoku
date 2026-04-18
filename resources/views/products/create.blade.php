<h1>Tambah Produk</h1>

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="POST" action="{{ route('products.store') }}">
    @csrf

    <input type="text" name="nama" placeholder="Nama Produk"><br>
    <input type="number" name="harga" placeholder="Harga"><br>
    <input type="number" name="stok" placeholder="Stok"><br>

    <button type="submit">Simpan</button>
</form>