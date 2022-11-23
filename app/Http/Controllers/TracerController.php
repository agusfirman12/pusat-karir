<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\TracerAnswer;
use App\Models\TracerUser;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TracerController extends Controller
{
    public function login()
    {
        return view("tracer_study/login");
    }
    public function loginProcess(Request $request){ 
        $credentials = $request;
        $credentials = $request->validate([
         'nisn' => 'required|unique:tracer_users|min:10',
         'name' => 'required',
         'email' => 'required|unique:tracer_users',
         'nomer' => 'required|unique:tracer_users',
         'type' => 'required',
         'program_studi' => 'required',
         'tahun_lulus' => 'required'
        ]);

        $user = new TracerUser();
        $user->nisn = $request->nisn;
        $user->name =  $request->name;
        $user->email = $request->email;
        $user->nomer = $request->nomer;
        $user->type = $request->type;
        $user->program_studi = $request->program_studi;
        $user->tahun_lulus = $request->tahun_lulus;
        $user->remember_token = $request->_token;
        return view('tracer_study/page',['user' => $user]);
    }


    //soal 1
    public function viewSoal1(){
        return view('tracer_study/page');
    }

    public function soal1Process(Request $request){
        if(TracerAnswer::where('nisn',$request->nisn)==!null) {
             $user = TracerAnswer::find('$nisn');
             $user->akademi = $request->akademi;
             $user->save(); 
            
        }else{
            // $credentials =  $request->validate([
            //     'nisn' => 'required|unique:tracer_answers',
            //     'akademi' => 'required',
            // ]);
    
            $user = new TracerAnswer();
            $user->nisn = $request->nisn;
            $user->akademi = $request->akademi;
            $user->save();
        }
   
      
        return redirect()->route('soal2'); 
    }

    //soal 2
    public function viewSoal2(){

        return view('tracer_study/soal2');
    }

    public function soal2Process(Request $request){
      
        return redirect()->route('soal3');
        
     
    }

        //soal 3
        public function viewSoal3(){


            return view('tracer_study/soal3');
        }
    
        public function soal3Process(Request $request){
        
            return redirect()->route('soal4');
            
            
            
        }

        //soal4

    public function viewSoal4(){


        return view('tracer_study/soal4');
    }

    public function soal4Process(Request $request){
       
        return redirect()->route('soal5')->withErrors("data gagal");
        
        
        
    }

    //soal5
        
        public function viewSoal5(){


            return view('tracer_study/soal5');
        }
    
        public function soal5Process(Request $request){
          
            return redirect()->route('soal6')->withErrors("data gagal");
            
            
            
        }

            //soal 6

    public function viewSoal6(){


        return view('tracer_study/soal6');
    }

    public function soal6Process(Request $request){
      
        return redirect()->route('soal7')->withErrors("data gagal");
        
        
        
    }



        //soal 7
        public function viewSoal7(){


            return view('tracer_study/soal7');
        }
    
        public function soal7Process(Request $request){
           
            return redirect()->route('finish')->withErrors("data gagal");
            
            
            
        }
        public function finish(){


            return view('tracer_study/page-success');
        }
}
