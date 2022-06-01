<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\Login;



class loginController extends Controller
{
    public function username()
    {
    return 'username';
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
    }   
    public function display()
    {
        return view("crud.home");
    }   


    public function homelogin(Request $request)
    {
     
        $login = $request->login;
     
     
        
        $userinput = Login::where([
            ['name', '=', $request->name],
            ['password', '=', $request->password]

        ])->first();

        if (isset($login)) {
            return redirect('/crud');
          }
          else{
            return redirect('/login');
          }



        // if ($userinput != null) {
        //     // Session::flash('alert-info', 'No Change have been made');
        //     return redirect('/crud');
        //     // return view("crud");
        // } else {
        //     // $website_info->update($requestData);
        //     // Session::flash('alert-info', 'No Change have been made');
        //     return redirect('/login');
        // }



    }  
    public function register()
    { 
        return view("crud.register");
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("success");
    }
    

  
}
