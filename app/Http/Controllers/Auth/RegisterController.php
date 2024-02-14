<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required|min:3|max:50',
            'email' => 'required|email|max:50|unique:users',
            'password' => 'required|min:7|max:30',
            'phone' => 'required|min:7|max:20',
            'location' => 'required|min:7|max:255',
            'no_sim' => 'required|min:7|max:15',
            'terms' => 'accepted',
        ], [
            'name.required' => 'Nama Dibutuhkan',
            'email.required' => 'Email Dibutuhkan',
            'password.required' => 'Password Dibutuhkan',
            'phone.required' => 'Nomor Gawai Dibutuhkan',
            'location.required' => 'Alamat Dibutuhkan',
            'no_sim.required' => 'Nomor SIM Dibutuhkan',
            'terms.accepted' => 'Anda Harus Menyetujui Syarat dan Ketentuan'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'location' => $request->location,
            'no_sim' => $request->no_sim,
        ]);


        Auth::login($user);


        return redirect(RouteServiceProvider::HOME);
    }
}
