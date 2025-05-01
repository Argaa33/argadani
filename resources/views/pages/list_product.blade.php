@extends('layouts.list')

@section('title', 'Daftar Produk')

@section('content')
<table class="table-auto w-full">
    <thead>
        <tr>
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">PRODUK</th>
            <th class="px-4 py-2">HARGA</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $post)
        <tr>
            <td class="border px-4 py-2">{{ $post['id'] }}</td>
            <td class="border px-4 py-2">{{ $post['nama'] }}</td>
            <td class="border px-4 py-2">{{ $post['harga'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

