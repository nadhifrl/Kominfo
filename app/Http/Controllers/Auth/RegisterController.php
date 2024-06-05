<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'name' => ['required', 'string', 'max:50', 'unique:users'],
                'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
                'alamat' => ['required', 'string', 'max:100'],
                'nomortelepon' => ['required','min:11' , 'max:13'],
                'password' => ['required', 'string','max:60', 'confirmed'],
            ],

            [
                'name.required' => 'Harap isi bidang ini',
                'name.max' => 'Maksimal harus 50 huruf',
                'email.required' => 'Harap isi bidang ini',
                'email.max' => 'Maksimal harus 50 karakter',
                'alamat.required' => 'Harap isi bidang ini',
                'alamat.max' => 'Maksimal harus 100 karakter',
                'nomortelepon.required' => 'Harap isi bidang ini',
                'nomortelepon.numeric' => 'Harap Masukkan Nomor',
                'nomortelepon.min' => 'Minimal harus 11 nomor',
                'nomortelepon.max' => 'Maksimal harus 13 nomor',
                'password.required' => 'Harap isi bidang ini',
                'password.max' => 'Maksimal harus 60 karakter',
                'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
                'name.required' => 'Harap isi bidang ini',
                'name.unique' => 'Username sudah terdaftar',
                'email.unique' => 'E-Mail Address sudah terdaftar',
                
                
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'alamat' => $data['alamat'],
            'nomortelepon' => $data['nomortelepon'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
