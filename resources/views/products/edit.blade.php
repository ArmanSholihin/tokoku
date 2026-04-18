<h1>Edit Produk</h1>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="nama" value="{{ $product->nama }}"><br>
    <input type="number" name="harga" value="{{ $product->harga }}"><br>
    <input type="number" name="stok" value="{{ $product->stok }}"><br>

    <button type="submit">Update</button>
</form>