<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

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
        // $data = $request->all();
        // Login::create($data);
        // return redirect('/login')->with('flash_message', 'Employee Addedd!');  


        $user = Login::create($request->validated());
        auth()->login($user);

        return redirect('/login')->with('success', "Account successfully registered."); 
    }



   
}
