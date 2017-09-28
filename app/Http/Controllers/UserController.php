<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 

use App\User;

class UserController extends Controller
{
    
    
      
    public function showWithWord($word,$id){
        $user=User::find($id);
            return view('users.show',array('user'=>$user));
               
    }
    
    
    
    
    
    public function show($id){
        $user=User::find($id);
            return view('users.show',array('user'=>$user));
               
        
    }
    
    
    
    
    public function index (){
        $users=User::all();
        return view ('users.index',array('users'=>$users));
        
        
    }
    
    
    
    
    
    
}