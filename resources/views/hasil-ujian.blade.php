@extends('layouts.master')
@section('title', 'Hasil Ujian')
@section('content')
    <h2>Hasil Ujian</h2>
    <p>Nilai Anda: <strong>{{ $nilai }}</strong></p>
    
    @if($nilai >= 85)
        <p style="color: green; font-weight: bold;">Grade: A - Sangat Baik</p>
    @elseif($nilai >= 70)
        <p style="color: blue; font-weight: bold;">Grade: B - Baik</p>
    @elseif($nilai >= 60)
        <p style="color: orange; font-weight: bold;">Grade: C - Cukup</p>
    @else
        <p style="color: red; font-weight: bold;">Grade: D - Kurang</p>
    @endif
    
    @unless($lulus)
        <p style="color: red; font-weight: bold;">?? Anda belum lulus. Silahkan mengulang ujian.</p>
    @endunless
@endsection
