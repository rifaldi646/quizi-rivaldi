@extends('layouts.app')
@section('content')
    <div class="container" class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <a class="btn btn-outline-success btn-sm " href="{{ url('golongan/create')}}">Tambah Data</a>
        <h3>DAFTAR GOLONGAN</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
      
        <table class="table table-info">
            <tr>
                <td>NO</td>
                <td>KODE</td>
                <td>NAMA</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr class="table-light">
                <td>{{ $row->gol_id}}</td>
                <td>{{ $row->gol_kode}}</td>
                <td>{{ $row->gol_nama}}</td>
                <td><a class="btn btn-warning btn-sm float" href="{{url('golongan/' .$row->gol_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('golongan/' .$row->gol_id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection