@extends('layouts.app')
@section('content')
<div class="container"> 
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Golongan</h1>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Data Golongan</h6>
            </div>
            <div class="card-body">
    <form method="POST" action="{{ url('/golongan') }}">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2">ID</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="gol_id" placeholder="Masukan ID" required=""
                    autofocus="">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">KODE</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="gol_kode" placeholder="Masukan Kode" required="">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">NAMA</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="gol_nama" placeholder="Masukan Nama" required="">
            </div>
        </div>
        </div>
        <div class="form-group float-right">
            <a href="{{ url('/golongan') }}" class="btn btn-primary">
                <i class="fa fa-arrow-left mr-2"></i> KEMBALI
            </a>
            <button class="btn btn-success" type="submit" name="input">
                <i class="fa fa-save mr-2"></i> SIMPAN
            </button>
        </div>
    </form>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection