@extends('layouts.main')

<style>
    table {
        border-collapse: separate;
        border-spacing: 0 2px;
    }

    th,
    td {
        padding: 5px 10px;
    }

    .button1 {
        background-color: blue;
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
    <h2>Data Minuman Khas Kalimantan Barat</h2>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Rasa</th>
                    <th></th>
                    <th scope="col">Action</th>
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($minuman as $drink)
            <tr>
                <td>{{$no++}}</td>
                <td><img src="{{ $drink->gambar }}" alt="{{ $drink->nama }}" width="100" height="105"></td>
                <td>{{$drink->nama}}</td>
                <td>{{$drink->harga}}</td>
                <td>{{$drink->rasa}}</td>
                <td>
                    <th><a type="button" class="button1" href="/minuman/detail/{{$drink->id}}">Detail</a></th>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection