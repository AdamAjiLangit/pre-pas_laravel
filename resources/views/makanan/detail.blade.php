@extends('layouts.main')

<style>
.button {
    background-color: red;
    border: none;
    border-radius: 5px;
    color: white;
    padding: 15px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

@section('container')
    <h2>Detail Makanan {{ $makanan->nama }}</h2>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Rasa</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Expired</th>
                </th>
            </tr>
        </thead>
        @php
            $no = 1;
        @endphp
        <tr>
            <td>{{ $no++ }}</td>
            <td><img src=  "{{ $makanan->gambar }}" alt="{{ $makanan->nama }}" width="100" height="105"></td>
            <td>{{ $makanan->nama }}</td>
            <td>{{ $makanan->harga }}</td>
            <td>{{ $makanan->rasa }}</td>
            <td>{{ $makanan->deskripsi }}</td>
            <td>{{$makanan->expired}}</td>

        </tr>
    </table>
    <a class="button" href="/makanan/all">back</a>
@endsection
