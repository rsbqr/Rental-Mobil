<?php

namespace App\Http\Controllers;

// use App\Models\Role;
use App\Models\Role;
use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class RegisterCarController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard');
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

            'merek' => 'required|min:3|max:20',
            'model' => 'required|min:3|max:20',
            'no_plat' => 'required|min:7|max:20',
            'tarif' => 'required|min:7|max:20',
        ], [
            'merek.required' => 'Merek Dibutuhkan',
            'model.required' => 'Model Mobil Dibutuhkan',
            'no_plat.required' => 'Nomor Plat Dibutuhkan',
            'tarif.required' => 'Tarif Dibutuhkan'
        ]);

        $car = Car::create([
            'merek' => $request->merek,
            'model' => $request->model,
            'no_plat' => $request->no_plat,
            'tarif' => $request->tarif,
        ]);


        return redirect(RouteServiceProvider::HOME);
    }
}
