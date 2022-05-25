<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;



use \Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;


use DB;

class BlogsController extends Controller
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

            $data= Blog::all();
        
            return view('admin.blogs.index',['data'=>$data]);
                 
    }
    
    public function create(){
   
    return view('admin.blogs.form');
    
    }
    
    public function store(Request $request){
  
        try{
           
            $role=Auth::user()->scid;
         
           
            
         
                  
            $blog= new Blog;

            $blog->title = $request->title;
            $blog->date= $request->date;
            $blog->content= $request->content;
            $blog->author= $request->author;
            $blog->category= $request->category;
            $blog->sd= $request->sd;
       
            $blog->save();
          
    
            $request->session()->flash('alert-success', 'Blog was added successfully!');
            return back();
    
    
        }
    catch(Exception $e){
       
        $request->session()->flash('alert-danger', 'Sorry! Operation failed');
        return back();
    }
       
    }
    

    public function edit($id){
    
        $data=Blog::find($id);
        return view('account.forms.edit_Blogs', compact('data'));
    }
    
    public function update(Request $request, $id){
    
        try{
       
        
        $blog=Blog::find($id);

        $blog->name = $request->get('name');
        $blog->scid= $request->get('scid');
        $blog->sid= $request->get('sid');
        $blog->clss= $request->get('clss');
     
    
        $blog->save();
      
    
        $request->session()->flash('alert-success', 'Blog was updated successfully!');
        return back();
    
    
    }
    catch(Exception $e){
    
    $request->session()->flash('alert-danger', 'Sorry! Operation failed');
    return back();
    }
    
        
    }
    
    
         public function destroy(Request $request, $id){
    
        try{
       
        
            $blog=Blog::find($id);
           
            $blog->delete();
          
        
            $request->session()->flash('alert-success', 'Blogs was deleted successfully!');
            return back();
        
        }
        catch(Exception $e){
        
        $request->session()->flash('alert-danger', 'Sorry! Operation failed');
        return back();
        }
        
    }

    
        public function show(){




            //
            
        }

  

     
     
    
    
}
