@extends('crud.layout')

@section('title', 'Home Page')

@section('content')

    <div class="container">
        <div class="row">   
 
            
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 Crud</h2>
                    </div>
                    <div class="card-body">
                       
                        <a href="{{ route('crud.create') }}" class="btn btn-success btn-sm" title="Add New Student">


                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>



                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                               

                                @foreach($crud as $item)
                                <!-- $students table database naa sa modem -->
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td><img src="{{ asset($item->picture) }}"  width="50" height="60">
                                          
                                        </td>
                                        <td>
                                            <a href="{{  route('crud.show', $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('crud.edit', $item->id) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ route('crud.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <form method="POST" action="{{ route('home.login', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"><i class="fa fa-trash-o" aria-hidden="true"></i> Logout</button>
                                </form>

                                {{-- @auth
                                {{auth()->user()->name}}
                                <div class="text-end">
                                  <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
                                </div>
                                @endauth --}}


                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection