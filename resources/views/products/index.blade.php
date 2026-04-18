<h1>Daftar Produk</h1>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<a href="{{ route('products.create') }}">Tambah Produk</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->nama }}</td>
        <td>{{ $product->harga }}</td>
        <td>{{ $product->stok }}</td>
        <td>
            <a href="{{ route('products.edit', $product->id) }}">Edit</a>

            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin hapus?')">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>