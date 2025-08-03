<form method="POST" action="{{ route('products.update', $product) }}">
    @csrf @method('PUT')
    <input name="nama" value="{{ old('nama', $product->nama) }}">
    ...
</form>
