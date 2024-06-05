<?php

namespace App\Http\Controllers\instansi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('instansi.profil.index')->with('user', $user);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user()->find($id);
        return view('instansi.profil.edit')->with('user', $user);
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
        $request->validate(
            [
                'name' => ['required','max:50'],
                'email' => ['required','max:50'],
                'alamat' => ['required','max:100'],
                'nomortelepon' => ['required',  'min:11..', 'max:13',],
            ],
            [
                'name.required' => 'Harap isi bidang ini',
                'name.max' => 'Maksimal harus 50 huruf',
                'nomortelepon.required' => 'Harap isi bidang ini',
                'nomortelepon.numeric' => 'Harap Berisikan Nomor',
                'nomortelepon.min' => 'Minimal harus 11 nomor',
                'nomortelepon.max' => 'Maksimal harus 13 nomor',
                'email.required' => 'Harap isi bidang ini',
                'email.max' => 'Maksimal harus 50 karakter',
                'alamat.required' => 'Harap isi bidang ini',
                 'alamat.max' => 'Maksimal harus 100 karakter',
                
            ]
        );
        $user = Auth::user()->find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nomortelepon' => $request->nomortelepon,
        ]);

        return redirect()->route('profil.index');
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
