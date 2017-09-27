<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
     public function __invoke($id)
    {
        $posts = App\Post::all();

         foreach ($posts as $post) {
        echo $post->title. '<br>' .$post->body. '<br>'. $post->image. '<br>';
         }
      }

    
    
}

