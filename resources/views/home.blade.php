@extends('layouts.master')
@section('title', 'Home Page')
@section('content')
    <h2>Selamat Datang di Laravel</h2>
    <p>Ini adalah halaman utama.</p>
    
    @include('components.alert', ['warna' => '#4CAF50', 'pesan' => '? Selamat datang di website kami!'])
    @include('components.alert', ['warna' => '#2196F3', 'pesan' => '?? Fitur search tersedia di halaman ini'])
@endsection
