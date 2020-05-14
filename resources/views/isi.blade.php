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

@foreach (App\berita::all() as $berita)

<p style="font-size: 22px; font-family: cursive; ">
    {{ $berita->judul }}
</p>
<p style="font-size: 13px; border-top: 1px solid; border-bottom: 1px solid; padding: 5px;">
    {{ $berita->created_at->format('M d, Y') }}
</p>
<p style="font-size: 18px; border-bottom: 1px solid; padding: 15px;">
    {{ $berita->isi }}
</p>



@endforeach
</body>
</html>
