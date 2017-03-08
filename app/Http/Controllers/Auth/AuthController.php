<?php

namespace App\Http\Controllers\Auth;

use App\Mahasiswa;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nim' => 'required|max:15',
            'name' => 'required|max:30',
            'jk' => 'required|max:10',
            'tempat' => 'required|max:20',
            'tgl_lahir' => 'required|date',  //////////////////////////////
            'agama' => 'required|max:10',
            'jalurseleksi' => 'required|max:20',
            'jurusan' => 'required|max:30',
            'prodi' => 'required|max:30',
            'tglterdaftar' => 'required|date',  ///////////////////////////
            'nohp' => 'required|max:15',
            'alamat' => 'required|text',   /////////////////////////
            'email' => 'required|email|max:255|unique:users',
            'Username' => 'required|max:50',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Mahasiswa::create([
            'nim' => $data['nim'],
            'nama' => $data['name'],
            'jk' => $data['jk'],
            'tempat' => $data['tempat'],
            'tgl_lahir' => $data['tgllahir'],
            'agama' => $data['agama'],
            'jalurseleksi' => $data['jalur'],
            'jurusan' => $data['jurusan'],
            'prodi' => $data['prodi'],
            'tglterdaftar' => $data['tgldaftar'],
            'nohp' => $data['nohp'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
