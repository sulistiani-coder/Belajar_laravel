<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Buku</h2>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $book->judul) }}">
            @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Penulis</label>
            <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" value="{{ old('penulis', $book->penulis) }}">
            @error('penulis') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror" value="{{ old('penerbit', $book->penerbit) }}">
            @error('penerbit') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control @error('tahun_terbit') is-invalid @enderror" value="{{ old('tahun_terbit', $book->tahun_terbit) }}">
            @error('tahun_terbit') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>