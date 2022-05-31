<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Login;

use Auth;

class loginController extends Controller
{
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
     

        $userinput = Login::where([
            ['name', '=', $request->name],
            ['password', '=', $request->password]
        ])->first();


        if ($userinput != null) {
            // Session::flash('alert-info', 'No Change have been made');
            return redirect('/crud');
            // return view("crud");
        } else {
            // $website_info->update($requestData);
            // Session::flash('alert-info', 'No Change have been made');
            return redirect('/login');
        }



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
