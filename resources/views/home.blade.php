@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BERANDA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    
                  
             
                    <div class="box">
                    <h3> {{ __('Selamat datang di website PLN, Kami siap membantu anda') }}</h3>
                    <br><br>
           <h2>Data Golongan</h2>
           <h4>Lihat data golongan yang tersedia pada halaman ini</h4>
           <a href="index.blade.php">Data Golonngan</a>
    </div>
    <br><br><hr>
    <div class="box">
    <h2>Data Pelanggan</h2>
           <h4>Anda dapat menambahkan,mengedit dan menghapus data pelanggan</h4>
           <h4> Tekan link dibawah untuk melanjutkan</h4>
           <a href="index.blade.php">Data Pelanggan</a>
    </div>
    <br><br><hr>
    <div class="box">
    <h2>Data Pengguna</h2>
           <h4>Pengguna yang terdaftar akan tampil di halaman ini</h4>
        
           <a href="index.blade.php">Data Pengguna</a>
    </div>
    <br><br><hr>
            </div>
        </div>
    </div>
</div>
@endsection
