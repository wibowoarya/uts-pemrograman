@extends('dashboard')
@section('content')
<h1>Halaman Kategori</h1>
<table class="table table-dark">
    <thead>
        <tr>
            <th scope"col">NO</th>
            <th scope"col">Kategori</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($kategori as $kategori)
        <tr>
            <td>{{ $no}}</td>
            <td>{{ $kategori->kategori}}</td>
        </tr>
        <?php $no++; ?>
        @endforeach
    </tbody>
</table>
@endsection

