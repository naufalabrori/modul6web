<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@section('body')

<h1>Portal - Kabar Burung</h1>
<a href="/berita/tambah">Tambah Berita</a>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Published</th>
            <th>Tanggal</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php $no=1 ?>
        @foreach (App\berita::all() as $berita)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $berita->judul }}</td>
            <td>{{ $berita->published }}</td>
            <!-- <td>{{ $berita->created_at->format('M d, Y') }}</td> -->
            <td>{{ $berita->created_at->diffForHumans()}}</td>
            <td><a href="/berita/{{$berita->id}}/destroy">Hapus</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
</body>
</html>
