<!DOCTYPE html>
<html>
<head>
    <title>Detail Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Detail Buku</h2>
    <table class="table table-bordered">
        <tr>
            <th>Judul</th>
            <td>{{ $book->judul }}</td>
        </tr>
        <tr>
            <th>Penulis</th>
            <td>{{ $book->penulis }}</td>
        </tr>
        <tr>
            <th>Penerbit</th>
            <td>{{ $book->penerbit }}</td>
        </tr>
        <tr>
            <th>Tahun Terbit</th>
            <td>{{ $book->tahun_terbit }}</td>
        </tr>
    </table>
    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
</div>
</body>
</html>