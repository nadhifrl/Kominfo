<?php

namespace App\Http\Controllers\instansi;

use App\Http\Controllers\Controller;
use Storage;
use Illuminate\Http\Request;
use App\Pengajuan;
use Auth;
use PDF;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('instansi.pengajuan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama_dinas' => ['required', 'max:100'],
                'alamat' => ['required'],
                'nama_penanggung' => ['required', 'max:100'],
                'nip' => ['required', 'min:18', 'max:20'],
                'pangkat' => ['required', 'max:100'],
                'notelepon' => ['required', 'min:11', 'max:13'],
                'notelepon_teknis' => ['required', 'min:11', 'max:13'],
                'nama_teknis' => ['required', 'max:100'],
                'sub_domain' => ['required', 'max:100'],
                'nama_aplikasi' => ['required', 'max:100'],
                'ip' => ['required', 'max:255'],
                'fungsi_app' => ['required'],
                'file' => ['mimes:pdf', 'required'],
            ],
            [
                'nama_dinas.required' => 'Harap isi bidang ini',
                'nama_dinas.max' => 'Maksimal harus 100 karakter',
                'alamat.required' => 'Harap isi bidang ini',
                'nama_penanggung.required' => 'Harap isi bidang ini',
                'nama_penanggung.max' => 'Maksimal harus 100 karakter',
                'nip.required' => 'Harap isi bidang ini',
                'nip.min' => 'Minimal harus 18 karakter',
                'nip.max' => 'Maksimal harus 100 karakter',
                'pangkat.required' => 'Harap isi bidang ini',
                'pangkat.max' => 'Maksimal harus 100 karakter',
                'notelepon.required' => 'Harap isi bidang ini',
                'notelepon.min' => 'Minimal harus 11 karakter',
                'notelepon.max' => 'Maksimal harus 13 karakter',
                'notelepon_teknis.required' => 'Harap isi bidang ini',
                'notelepon_teknis.min' => 'Minimal harus 11 karakter',
                'notelepon_teknis.max' => 'Maksimal harus 13 karakter',
                'nama_teknis.required' => 'Harap isi bidang ini',
                'nama_teknis.max' => 'Maksimal harus 100 karakter',
                'sub_domain.required' => 'Harap isi bidang ini',
                'sub_domain.max' => 'Maksimal harus 100 karakter',
                'nama_aplikasi.required' => 'Harap isi bidang ini',
                'nama_aplikasi.max' => 'Maksimal harus 100 karakter',
                'ip.required' => 'Harap isi bidang ini',
                'ip.max' => 'Maksimal harus 255 karakter',
                'fungsi_app.required' => 'Harap isi bidang ini',
                'file.mimes' => 'Harus Berisikan File dengan format : pdf ',
            ]
        );

        $file = $request->file('file')->store('pengajuan');
        $user = Auth::user();
        $pengajuan = Pengajuan::where('user_id', $user->id);
        Pengajuan::create([
            'user_id' => $user->id,
            'nama_dinas' => $request->nama_dinas,
            'alamat' => $request->alamat,
            'nama_penanggung' => $request->nama_penanggung,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'notelepon' => $request->notelepon,
            'notelepon_teknis' => $request->notelepon_teknis,
            'nama_teknis' => $request->nama_teknis,
            'sub_domain' => $request->sub_domain,
            'nama_aplikasi' => $request->nama_aplikasi,
            'ip' => $request->ip,
            'fungsi_app' => $request->fungsi_app,
            'alasan' => $request->alasan,
            'file' => $file,
            'status' => "Proses"
        ]);
        return redirect()->route('terkirim.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengajuan = Pengajuan::find($id);
 
    	$pdf = PDF::loadview('instansi.pengajuan_pdf',['pengajuan'=>$pengajuan]);
    	return $pdf->download('Pengajuan Domain dan Hosting.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sarana = Pengajuan::find($id);
        return view('admin.sarana.edit', compact('sarana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'judul' => ['required', 'max:100'],
                'body' => 'required',
                'gambar' => ['mimes:jpg,jpeg,bpm,png'],
            ],
            [
                'judul.required' => 'Harap isi bidang ini',
                'judul.max' => 'Maksimal harus 100 karakter',
                'body.required' => 'Harap isi bidang ini',
                'gambar.mimes' => 'Harus Berisikan Gambar dengan format : jpg/jpeg/bpm/png ',
            ]
        );

        $user = Auth::user();
        $pemesanantiket = Sarana::where('user_id', $user->id);
        if (empty($request->file('gambar'))) {
            $sarana = Sarana::find($id);
            //Storage::delete($sarana->gambar);
            $sarana->update([
                'user_id' => $user->id,
                'judul' => ($request->judul),
                'body' => $request->body,
                //'gambar'=>$request->file('gambar')->store('sarana'),
            ]);
        } else {
            $sarana = Sarana::find($id);
            Storage::delete($sarana->gambar);
            $sarana->update([
                'user_id' => $user->id,
                'judul' => \Str::slug($request->judul),
                'body' => $request->body,
                'gambar' => $request->file('gambar')->store('sarana'),
            ]);
        }
        return redirect()->route('sarana.index');
    }
    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
