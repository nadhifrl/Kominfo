@extends('layouts.adminall')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4" style="font-family:Times New Roman">
    <h1><b>Konfirmasi Pengajuan</b></h1>
</div>
<hr>
<div class="container" style="font-family:Times New Roman">
    <div class="card">
        <div class="card-header" align="center">
            <h3>Pengajuan Domain dan Hosting</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label>Nama Dinas</label>
                    <label class="form-control col-md-6">{{$konfirmasi->nama_dinas}}</label>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control col-md-6" readonly> {{$konfirmasi->alamat}}</textarea>
                </div>
                <hr>
                <h5><b>Penanggung Jawab Administratif (Pejabat di Dinas/Intansi)</b></h5>
                <div class="form-group">
                    <label>Nama</label>
                    <label class="form-control col-md-6">{{$konfirmasi->nama_penanggung}}</label>
                </div>
                <div class="form-group">
                    <label>NIP/NIK</label>
                    <label class="form-control col-md-6">{{$konfirmasi->nip}}</label>
                </div>
                <div class="form-group">
                    <label>Pangkat/Golongan</label>
                    <label class="form-control col-md-6">{{$konfirmasi->pangkat}}</label>
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <label class="form-control col-md-6">{{$konfirmasi->notelepon}}</label>
                </div>
                <hr>
                <h5><b>Penanggung Jawab Teknis</b></h5>
                <div class="form-group">
                    <label>Nama</label>
                    <label class="form-control col-md-6">{{$konfirmasi->nama_teknis}}</label>
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <label class="form-control col-md-6">{{$konfirmasi->notelepon_teknis}}</label>
                </div>
                <hr>
                <h5><b>Data Aplikasi Web</b></h5>
                <div class="form-group">
                    <label>Nama Aplikasi</label>
                    <label class="form-control col-md-6">{{$konfirmasi->nama_aplikasi}}</label>
                </div>
                <div class="form-group">
                    <label>Usulan nama sub-domain</label>
                    <label class="form-control col-md-6">{{$konfirmasi->sub_domain}}</label>
                </div>
                <div class="form-group">
                    <label>Alamat IP **)</label>
                    <textarea class="form-control col-md-6" readonly>{{$konfirmasi->ip}}</textarea>
                </div>
                <div class="form-group">
                    <label>Fungsi Aplikasi</label>
                    <textarea class="form-control col-md-6" readonly>{{$konfirmasi->fungsi_app}}</textarea>
                </div>
            </form>
            <div class="form-group">
                <a href="{{route('konfirmasi.index')}}" class="btn btn-info" style="margin-top: 10px">Kembali</a>
            </div>
        </div>
    </div>
</div>

@endsection