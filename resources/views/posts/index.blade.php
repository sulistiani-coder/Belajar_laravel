@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Post</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Tambah Post</a>
    </div>

    <ul class="list-group">
        @forelse($posts as $post)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $post->title }}</strong>
                    <div class="text-muted">{{ Str::limit($post->content, 80) }}</div>
                </div>
                <div>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-info me-1">Detail</a>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus post ini?')">Hapus</button>
                    </form>
                </div>
            </li>
        @empty
            <li class="list-group-item">Tidak ada post.</li>
        @endforelse
    </ul>
</div>
@endsection