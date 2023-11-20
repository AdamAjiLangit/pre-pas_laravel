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
    <h2>Detail Makanan {{ $starbucks->nama }}</h2>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Rasa</th>
                    <th scope="col">Expired</th>
                </th>
            </tr>
        </thead>
        @php
            $no = 1;
        @endphp
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $starbucks->nama }}</td>
            <td>{{ $starbucks->harga }}</td>
            <td>{{ $starbucks->deskripsi }}</td>
            <td>{{ $starbucks->rasa }}</td>
            <td>{{$starbucks->expired}}</td>

        </tr>
    </table>
    <a class="button" href="/starbuck/all">Back</a>
@endsection
