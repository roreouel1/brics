<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fee;
use App\Models\Classe;
use App\Models\Setting;
use App\Models\Student;
use App\Models\Account;


/*use App\Utils\Eloquent\Traits\SoftExists;
use App\Utils\Eloquent\Traits\SoftUniques;*/

use \Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;


use DB;


class AccountController extends Controller
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

        if(Auth::user()->role=='Admin' ){
            $data= Fee::all();
        
            return view('account.views.list_sfees',['data'=>$data]);
         }else{
             
            $role=Auth::user()->scid;
         
            $data= Fee::where('scid',$role)->get();
            return view('account.views.list_sfees',['data'=>$data]);

         } 


         
    }
    
    public function create(){
    
             if(Auth::user()->scid!=null ){ 
                $role=Auth::user()->scid;
                $fees=DB::table('settings')->where('scid',$role)->pluck('fees')->first();  
                $term=DB::table('settings')->where('scid',$role)->pluck('term')->first();  
                $ay=DB::table('settings')->where('scid',$role)->pluck('ay')->first();                               
               } else{         

              $fees=null;
              $term=null;
              $ay=null;

               }
                 
                   return view('account.forms.pay_sfees',compact('fees','term','ay'));
    
    }
    
    public function store(Request $request){
  
        try{
           
            $role=Auth::user()->scid;
            $of=DB::table('settings')->where('scid',$role)->pluck('fees')->first();
            
           
            // if($request->amtdue > $of){

            // $term=DB::table('settings')->where('scid',$role)->value('term');  
            // $ay=DB::table('settings')->where('scid',$role)->value('ay');     
            // $id=DB::table('fees')->where('sid',$request->sid)
            // ->where('ay','<>',$ay)
            // ->where('term','<>',$term)
            // ->orderby('dop','desc')
            // ->value('id');
          
            // $fees=Fee::find($id);
            // $fees->status='crf';
            // $fees->save();
             

            // }
            
         
                  
            $fees= new Fee;

            $fees->name = $request->name;
            $fees->scid= $request->scid;
            $fees->sid= $request->sid;
            $fees->term= $request->term;
            $fees->ay= $request->ay;
            $fees->clss= $request->clss;
            $fees->dop= $request->dop;
            $fees->amtdue = $request->amtdue;
            $fees->amtpaid = $request->amtpaid;
            $fees->arrears = $request->arrears;
    
            $fees->save();
          
    
            $request->session()->flash('alert-success', 'Fee was paid successfully!');
            return back();
    
    
        }
    catch(Exception $e){
       
        $request->session()->flash('alert-danger', 'Sorry! Operation failed');
        return back();
    }
       
    }
    

    public function edit($id){
    
        $data=Fee::find($id);
        return view('account.forms.edit_fees', compact('data'));
    }
    
    public function update(Request $request, $id){
    
        try{
       
        
        $fees=Fee::find($id);

        $fees->name = $request->get('name');
        $fees->scid= $request->get('scid');
        $fees->sid= $request->get('sid');
        $fees->clss= $request->get('clss');
        $fees->dop= $request->get('dop');
        $fees->amtdue = $request->get('amtdue');
        $fees->amtpaid = $request->get('amtpaid');
        $fees->arrears = $request->get('arrears');

    
        $fees->save();
      
    
        $request->session()->flash('alert-success', 'Fee was updated successfully!');
        return back();
    
    
    }
    catch(Exception $e){
    
    $request->session()->flash('alert-danger', 'Sorry! Operation failed');
    return back();
    }
    
        
    }
    
    
         public function destroy(Request $request, $id){
    
        try{
       
        
            $fees=Fee::find($id);
           
            $fees->delete();
          
        
            $request->session()->flash('alert-success', 'Fees was deleted successfully!');
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

  

        public function autoComplete(Request $request)
        {
            if(Auth::user()->role=='Admin' ){
 
                $query =$request->get('search', ''); 
                
                $students= Student::select('clss','fn','on','ln','scid','sid')->where('ln', 'LIKE', '%' .$query. '%')
                                                                               ->OrWhere('fn', 'LIKE', '%' .$query. '%')
                                                                               ->OrWhere('on', 'LIKE', '%' .$query. '%')->limit(10)->get();
                                                         
                $response=array();
                foreach ($students as $student) {
                        $term=DB::table('settings')->where('scid',$student->scid)->value('term');  
                        $ay=DB::table('settings')->where('scid',$student->scid)->value('ay'); 
                        $check=DB::table('fees')->where('sid',$student->sid)
                                                ->where('ay',$ay)
                                                ->where('term',$term)
                                                ->count();
                        
                if($check){
     
                $fee=DB::table('fees')->where('sid',$student->sid)
                                    ->orderby('dop','desc')
                                    ->value('arrears');                     
                        
                                                    
                        }
                        else{          
                        $bf=DB::table('fees')->where('sid',$student->sid)         
                                                ->orderby('dop','desc')
                                                ->value('arrears');

            
                        $nf=DB::table('settings')->where('scid',$student->scid)->value('fees');  
                        
                            $fee= ($bf +  $nf );
                    
                        }
            
                        $response[]=array('value'=>$student->ln .' '.$student->fn .' '.$student->on,'clss'=>$student->clss ,'scid'=>$student->scid,'sid'=>$student->sid,'ay'=>$ay,'term'=>$term,'fees'=>$fee);
                }
                
                if(count($response))
          
                echo json_encode($response);
           
               else
               return ['value'=>'No Result Found','id'=>''];
               
    
             }else{
                 
            $role=Auth::user()->scid;
            $query =$request->get('search', ''); 
            $students= Student::orderby('ln','asc')->select('clss','fn','on','ln','scid','sid') ->Where('scid',Auth::user()->scid)
                                                                                                ->Where('ln',  'LIKE', '%' .$query. '%') 
                                                                                              ->limit(10)->get();
    
    
             $response=array();
             foreach ($students as $student) {
    
    
                $term=DB::table('settings')->where('scid',$student->scid)->value('term');  
                $ay=DB::table('settings')->where('scid',$student->scid)->value('ay'); 
                
                $check=DB::table('fees')->where('sid',$student->sid)
                                        ->where('ay',$ay)
                                        ->where('term',$term)
                                        ->count();
                            
    
                if($check>0){
                    $term=DB::table('settings')->where('scid',$student->scid)->value('term');  
                    $ay=DB::table('settings')->where('scid',$student->scid)->value('ay');  

                    $fee=DB::table('fees')->where('sid',$student->sid)
                                        ->orderby('dop','desc')
                                        ->value('arrears');                     
                            
                    }
                    else{


                  $term=DB::table('settings')->where('scid',$student->scid)->value('term');  
                  $ay=DB::table('settings')->where('scid',$student->scid)->value('ay'); 

                  $bf=DB::table('fees')->where('sid',$student->sid)         
                                          ->orderby('dop','desc')
                                           ->value('arrears');

    
                  $nf=DB::table('settings')->where('scid',$student->scid)->value('fees');  
                
                    $fee= ($bf +  $nf );

                
                    }
        
    
    
            $response[]=array('value'=>$student->ln .' '.$student->fn .' '.$student->on,'clss'=>$student->clss ,'scid'=>$student->scid,'sid'=>$student->sid,'ay'=>$ay,'term'=>$term,'fees'=>$fee);
            }

            if(count($response))
          
            echo json_encode($response);
       
           else
           return ['value'=>'No Result Found','id'=>''];
           
        } 
    
    
     
    
    
    }
}
    