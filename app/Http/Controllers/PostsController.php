<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function  show ($slug) {
        $post = \DB::table('posts')->where('slug',$slug)->first();
               
        dd($post);
        
        
        if (! array_key_exists($post,$posts)){
                    abort(404,'Sorry');
                }
                return view('post',[
                    'post' => $posts[$post]
                ]);
    }


    // public function  show ($post) {
    //     $posts =[
    //                 'first' => 'Hello is first',
    //                 'second' => 'Welcome Back'
    //             ];
    //             if (! array_key_exists($post,$posts)){
    //                 abort(404,'Sorry');
    //             }
    //             return view('post',[
    //                 'post' => $posts[$post]
    //             ]);
    // }
}
