<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class crudController extends Controller
{
    public function index()
    {
    // GET
        
        // index view (index.blade.php)
        $students = crud::all();
        // Student::all(); get the data from the model, (Student is the name of the model)
        return view('crud.index')->with('crud', $students);
        // view('students.index'),  directory where to go,
        // ->with('students', $students);, 'students' name of the student variable in foreach, 
    }
    
    public function create()
    {
        // GET

        return view('crud.create');

        // students.create, directory where to view
    }

    public function store(Request $request)
    {
        // POST
        
        $request->validate([
            'name' => 'required | regex:(^[a-zA-Z]+$)',
            'address' => 'required | regex:(^[a-zA-Z]+$)',
            'mobile' => 'required | regex:(^[0-9]+$)'   
            
 
        ]);

        $requestData = $request->all();
        $fileName = time().$request->file('pic')->getClientOriginalName();
        $path = $request->file('pic')->storeAs('`image`', $fileName, 'public');
        $requestData["picture"] = '/storage/'.$path;
        crud::create($requestData);
        return redirect('crud')->with('flash_message', 'Employee Addedd!');  

    }
    
    public function show($id)
    {
        // GET
        $x = crud::find($id);
        return view('crud.show')->with('varable', $x);
    }
    
    public function edit($id)
    {
        // GET

        $student = crud::find($id);
        return view('crud.edit')->with('varable', $student);
    }
  
    public function update(Request $request, $id)
    {
        // POST, (IF JAVASCRIPT PUT or PATCH)

        $student = crud::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('crud')->with('flash_message', 'student Updated!');  
    }


    public function image(Request $request, $id)
    {
        // POST, (IF JAVASCRIPT PUT or PATCH)


        return redirect('crud')->with('flash_message', 'Employee Addedd!');  
    }




  
  
    public function destroy($id)
    {
        crud::destroy($id);
        return redirect('crud')->with('flash_message', 'Student deleted!');  
    }
}
