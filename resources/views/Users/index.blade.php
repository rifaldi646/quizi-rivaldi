@extends('layouts.app')
@section('content')
    <div class="container">
        <a class="btn btn-outline-success btn-sm " href="{{ url('users/create')}}">Tambah Data</a>
        <h3>DATA PENGGUNA</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
     
        <table class="table table-info">
            <tr>
                <td>NO</td>
                <td>EMAIL</td>
                <td>PASSWORD</td>
                <td>NAMA</td>
                <td>ALAMAT</td>
                <td>NOMOR HP</td>
                <td>KODE POS</td>
                <td>ROLE</td>
                <td>AKTIF</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr class="table-light">
                <td>{{ $row->user_id}}</td>
                <td>{{ $row->user_email}}</td>
                <td>{{ $row->user_password}}</td>
                <td>{{ $row->user_nama}}</td>
                <td>{{ $row->user_alamat}}</td>
                <td>{{ $row->user_hp}}</td>
                <td>{{ $row->user_pos}}</td>
                <td>{{ $row->user_role}}</td>
                <td>{{ $row->user_aktif}}</td>
                <td><a class="btn btn-warning btn-sm float" href="{{url('users/' .$row->user_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('users/' .$row->user_id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Ingin Menghapus data ini yakin???')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection