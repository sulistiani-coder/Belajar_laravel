@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Post</h1>
    <ul class="list-group">
        @forelse($posts as $post)
            <li class="list-group-item">
                {{ $post->title ?? 'Post #' . $post->id }}
            </li>
        @empty
            <li class="list-group-item">Tidak ada post.</li>
        @endforelse
    </ul>
</div>
@endsection