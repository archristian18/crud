<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Login;

use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{

    //REGISTER
    public function register(Request $request){
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = Login::create([
            'name' => $fields['name'],
            'password' => bcrypt($fields['password'])
        ]);

        return redirect('login');
    }



    public function display()
    {
        return view("crud.home");
        
    }   


    public function homelogin(Request $request)
    {
     
        $value = $request->session()->get('key');

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("success");
    }


    public function store(Request $request) {
        auth()->logout();
        return redirect('/login');
    }

    
}
