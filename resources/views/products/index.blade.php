@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <ul>
        @forelse($products as $product)
            <li>{{ $product->name }}</li>
        @empty
            <li>Tidak ada produk.</li>
        @endforelse
    </ul>
</div>
@endsection