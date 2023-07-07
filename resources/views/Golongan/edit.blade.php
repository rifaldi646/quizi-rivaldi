@extends('layouts.app')
@section('content')
<div class="container">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Golongan</h1>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Data Golongan</h6>
            </div>
            <div class="card-body">
    <form action="{{ url('/golongan/' .$row->gol_id)}}" method="post">
        @method('PATCH')
        @csrf
        <div class="form-group row">
            <label class="col-sm-2">KODE</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="gol_kode" value="{{$row->gol_kode}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">NAMA</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="gol_nama" value="{{$row->gol_nama}}">
            </div>
        </div>
        </div>
        <div class="form-group float-right">
            <a href="{{ url('/golongan') }}" class="btn btn-danger">
                <i class="fa fa-arrow-left mr-2"></i> KEMBALI
            </a>
            <button class="btn btn-info" type="submit" name="input">
                <i class="fa fa-save mr-2"></i> UPDATE
            </button>
        </div>
    </form>
    
            </div>
        </div>
    </div>
</div>
</div>
@endsection