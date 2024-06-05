<?php

namespace App\Http\Controllers\instansi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pengajuan;
use Auth;
use PDF;

class TerkirimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pengajuan = Pengajuan::latest()->get();
        // return view('instansi.terkirim.index', compact('pengajuan'));

        // $pengajuan = Pengajuan::orderBy('id', 'DESC')->where('user_id', $user->id)->get();
        // return view('instansi.terkirim.index', compact('pengajuan'));
        $user = Auth::user();
        $pengajuan = DB::table('users')
            ->join('pengajuan', 'pengajuan.user_id', 'users.id')
            ->select('users.name', 'pengajuan.*')
            ->where('user_id', $user->id)
            ->get();
        return view('instansi.terkirim.index', compact('pengajuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('instansi.terkirim.detail', compact('pengajuan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
