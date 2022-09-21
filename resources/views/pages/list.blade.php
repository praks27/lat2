@extends('layouts.dashboard')
@section('content')

<a href="anggota/create" class="btn btn-success mb-2">Tambah Data</a>
<table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Date Birth</th>
        <th scope="col">Gender</th>
        <th scope="col">Address</th>
        <th scope="col">Major</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $list)
    <tr>
        {{-- untuk generate nomer urut otomatis --}}
        <th scope="row">{{ $loop->iteration }}</th>
        {{-- untuk memanggil data dari database dan di tampilkan --}}
        <td>{{ $list->name }}</td>
        <td>{{ $list->date_birth }}</td>
        <td>{{ $list->gender }}</td>
        <td>{{ $list->address }}</td>
        <td>{{ $list->major }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection
