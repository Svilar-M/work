<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 

use App\Post;

class PostController extends Controller
{
    
    
      
    public function showWithWord($word,$id){
        $post=Post::find($id);
            return view('posts.show',array('post'=>$post));
               
    }
    
    
    
    
    
    public function show($id){
        $post=Post::find($id);
            return view('posts.show',array('post'=>$post));
               
        
    }
    
    
    
    
    public function index (){
        $posts=Post::all();
        return view ('posts.index',array('posts'=>$posts));
        
        
    }
    
    
    
    
    
    
}
