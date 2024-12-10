<?php

namespace App\Http\Controllers;

use App\Models\Post;

class LikeController extends Controller
{
    //

    public function like(Post $post){



        $liker = auth()->user();
        $liker->likes()->detach($post);
        return to_route('posts.index')->with('status','Diste Like a un Post!');



    }

    public function dislike(Post $post){
        $liker = auth()->user();
        $liker->likes()->attach($post);
        return to_route('posts.index')->with('status','Diste Lissske a un Post!');


    }


}