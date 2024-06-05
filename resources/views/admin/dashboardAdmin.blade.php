@extends('layouts.admindashboard')

@section('content')
<br>
<div class="d-sm-flex align-items-center justify-content-between mb-4" style="font-family:Times New Roman">
    <h3>Pengajuan Masuk</h3>
</div>
<hr>
<div class=" box-body" style="font-family:Times New Roman">
    <table id="example1" class="table table-bordered table-striped">
        <thead class="text-center thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Dinas</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($konfirmasi as $item)
            <tr>
                <td>{{( $loop->iteration)}}</td>
                <td>{{str_limit($item->nama_dinas, 40, '...')}}</td>
                <td>{{str_limit($item->alamat, 40, '...')}}</td>
                <td>{{str_limit($item->status)}}</td>
                <td>
                    <a href="{{route('konfirmasi.show',$item->id)}}" class="btn btn-success">Detail</a>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection