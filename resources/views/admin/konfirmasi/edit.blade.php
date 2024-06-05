@extends('layouts.adminall')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4" style="font-family:Times New Roman">
    <h1><b>Verifikasi Pengajuan</b></h1>
</div>
<hr>
<div class="box-body pad" style="font-family:Times New Roman">
    <form action="{{route('konfirmasi.update',$konfirmasi->id)}}" enctype="multipart/form-data" method="POST">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label>Verifikasi :</label>
            <select name="status" class="form-control" style="width:250px">
                <option value='Disetujui'>Disetujui</option>
                <option value='Ditolak'>Ditolak</option>
            </select>
        </div>
        <div class="form-group">
            <label>Alasan :</label>
            <textarea type="text" class="form-control @error('alasan') is-invalid @enderror" name="alasan" placeholder="Alasan....."></textarea>
            @error('alasan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{route('konfirmasi.index')}}" class="btn btn-danger">Batal</a>
        </div>

    </form>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /.box -->
@endsection
@push('customdatatables')
<script src="{{asset('developer/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script>
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        //CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
@endpush