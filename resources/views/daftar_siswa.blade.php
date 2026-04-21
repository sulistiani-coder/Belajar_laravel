@extends('layouts.master')
@section('title', 'Daftar Siswa')
@section('content')
    <h2>Daftar Siswa</h2>
    <table border="1" style="width: 100%; text-align: left;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $index => $s)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $s['nama'] }}</td>
                    <td>{{ $s['nim'] }}</td>
                    <td>{{ $s['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
