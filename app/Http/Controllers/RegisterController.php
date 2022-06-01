<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;


class registerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function game(Request $request)
    {
        // $data = $request->all();  
        // login::create($data);

        login::create([
            'name' => $request['name'],
            'password' => Hash::make($request['password'])
          ]);
        return redirect('login');  

        // auth()->login($data);
        // return redirect('/login')->with('success', "Account successfully registered."); 

    }

    public function __construct()
    {
        $this->middleware('guest');
    }


   
}
