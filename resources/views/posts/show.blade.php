@extends('layouts.app')

@section('title', 'Detail Post')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>

    <div class="mb-3">
        <strong>Konten:</strong>
        <p>{{ $post->content }}</p>
    </div>

    @if($post->image)
        <div class="mb-3">
            <strong>Gambar:</strong>
            <div>
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid" style="max-width: 500px;">
            </div>
        </div>
    @endif

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
    <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
</div>
@endsection
