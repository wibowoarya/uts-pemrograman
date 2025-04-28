@extends('dashboard')
@section('content')
<h1>Halaman Berita</h1>
<table class="table table-dark">
    <thead>
        <tr>
            <th scope"col">NO</th>
            <th scope"col">Judul</th>
            <th scope"col">Deskripsi</th>
            <th scope"col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $no}}</td>
            <td>{{ $post->judul}}</td>
            <td>{{ $post->deskripsi}}</td>
            <td>aksi</td>
        </tr>
        <?php $no++; ?>
        @endforeach
    </tbody>
</table>
@endsection

