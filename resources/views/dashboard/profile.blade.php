@extends('layouts.dashboard')
@section('title', 'User Profile')
@section('content')
    <h2>User Profile</h2>
    <div style="background: #f5f5f5; padding: 20px; border-radius: 5px;">
        <p><strong>Nama:</strong> {{ $nama }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Alamat:</strong> {{ $alamat }}</p>
    </div>
    
    @include('components.alert', ['warna' => '#FF9800', 'pesan' => '?? Ini adalah halaman profile pengguna'])
@endsection

@push('scripts')
    <script src="{{ asset('js/profile.js') }}"></script>
@endpush
