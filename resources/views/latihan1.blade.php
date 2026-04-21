<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 BELAJAR BLADE</title>
</head>
<body>
<h1>Nama : {{ $nama }}</h1>
<p>Nilai Anda : 
    @php $rataRata = array_sum($nilai) / count($nilai); @endphp
    {{ number_format($rataRata, 2) }} (Rata-rata dari {{ implode(', ', $nilai) }})
</p>

<h2>Daftar Nilai:</h2>
<ul>
    @foreach ($nilai as $n)
        <li>{{ $n }}</li>
    @endforeach
</ul>

@if ($rataRata >= 80)
    <p>Selamat! Anda mendapatkan nilai A.</p>
@elseif ($rataRata >= 60)
    <p>Anda mendapatkan nilai B</p>
@else
    <p>Anda perlu mengulang ujian.</p>
@endif

//FOR
@for ($i = 1; $i <= 5; $i++)
    <p>Nomor: {{ $i }}</p>
@endfor

//WHILE
@php $count = 1; @endphp
@while ($count <= 3)
    <p>Perulangan ke-{{ $count }}</p>
    @php $count++; @endphp
@endwhile

//FOREACH
@php $buah = ['Apel', 'Jeruk', 'Mangga']; @endphp
<ul>
    @foreach ($buah as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
</body>
</html>
