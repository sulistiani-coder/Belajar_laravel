<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{
    // 1. Greeting dengan variabel $pesan
    public function greeting()
    {
        $pesan = 'Selamat Belajar Laravel Blade';
        return view('greeting', ['pesan' => $pesan]);
    }

    // 2. Daftar Siswa dengan @foreach
    public function daftarSiswa()
    {
        $siswa = [
            ['nama' => 'Ahmad Rizki', 'nim' => '20230001', 'email' => 'ahmad@student.edu'],
            ['nama' => 'Budi Santoso', 'nim' => '20230002', 'email' => 'budi@student.edu'],
            ['nama' => 'Citra Dewi', 'nim' => '20230003', 'email' => 'citra@student.edu'],
            ['nama' => 'Doni Pratama', 'nim' => '20230004', 'email' => 'doni@student.edu'],
            ['nama' => 'Erna Wijaya', 'nim' => '20230005', 'email' => 'erna@student.edu'],
        ];
        return view('daftar_siswa', ['siswa' => $siswa]);
    }

    // 3. Dashboard Profile dengan layout turunan
    public function profile()
    {
        $nama = 'Gojo Satoru';
        $email = 'gojo@jjk.com';
        $alamat = 'Tokyo, Japan - Jujutsu Society';
        return view('dashboard.profile', [
            'nama' => $nama,
            'email' => $email,
            'alamat' => $alamat
        ]);
    }

    // 4. Hasil Ujian dengan @if-@elseif-@else dan @unless
    public function hasilUjian($nilai = 75, $lulus = true)
    {
        // Jika nilai < 60, maka belum lulus
        $lulusStatus = $nilai >= 60;
        
        return view('hasil-ujian', [
            'nilai' => $nilai,
            'lulus' => $lulusStatus
        ]);
    }
}
