<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Pengajuan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $user = Auth::user();
        if ($user->role == 'admin') {
            return redirect('/admin');
        } else {
            return redirect('/instansi');
        }
    }


    // public function admin()
    // {
    //     return view('admin.dashboardAdmin');
    // }

    public function admin()
    {
        $konfirmasi = Pengajuan::all();
        $pengajuan = DB::table('pengajuan')->count();
        $proses = DB::table('pengajuan')
            ->where('status', 'Proses')
            ->count();
        $disetujui = DB::table('pengajuan')
            ->where('status', 'Disetujui')
            ->count();
        $ditolak = DB::table('pengajuan')
            ->where('status', 'Ditolak')
            ->count();
        return view('admin.dashboardAdmin', compact('konfirmasi', 'pengajuan', 'proses', 'disetujui', 'ditolak'));
    }
    public function masuk($id)
    {
        $pengajuan = Pengajuan::find($id);
        return view('admin.konfirmasi.detail', compact('pengajuan'));
    }

    public function detailtiket()
    {
        return view('pengunjung.detailtiket');
    }

    public function instansi()
    {
        return view('instansi.dashboard');
    }

    public function verifikasi()
    {
        return view('admin.verifikasi');
    }
}
