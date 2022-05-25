<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;


use \Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;



class UsersController extends Controller
{
     
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data= User::all();
        
        return view('admin.users.index',['data'=>$data]);  
    }
    
    
    public function show()
    {

    // 
                 
    }
    
    public function create(){
   
    return view('admin.users.form');
    
    }
    
    public function store(Request $request){
  
            $validatedData = $request->validate([
                'name' => 'required|min:5|max:250',
                'password' => 'required|min:8',
                'email' => 'required|email|unique:users'
            ], [
                'name.required' => 'Name is required',
                'password.required' => 'Password is required'
            ]);
  
        $validatedData['password'] =Hash::make($validatedData['password']);
        $user = User::create($validatedData);


        $request->session()->flash('alert-success', 'User was added successfully!');
        return back();
          
    
        }
        

       
    
    

    public function edit($id){
    
        $data=User::find($id);
        return view('admin.users.edit', compact('data'));
    }
    
    public function update(Request $request, $id){
    
        
        $user=User::find($id);

        $user->name = $request->get('name');
        $user->email= $request->get('email');
        $user->password=Hash::make( $request->get('password'));
        
     
    
        $user->save();
      
    
        $request->session()->flash('alert-success', 'User was updated successfully!');
        return back();
        
    }
    
    
         public function destroy(Request $request, $id){
    

        
            $user=User::find($id);
           
            $user->delete();
          
        
            $request->session()->flash('alert-success', 'User was deleted successfully!');
            return back();
      
    }

    
     

  

     
     
    
   
}
