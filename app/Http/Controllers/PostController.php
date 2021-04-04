<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class PostController extends Controller{

    public function allPosts(){
        
        $posts = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/posts"), true);

        return view('posts', [
            'posts' => $posts,
        ]);
    }

    public function individualPost($id){
        
        $json = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/posts/$id"), true);
        $userId = $json['userId'];
        $title = $json['title'];
        $body = $json['body'];

        return view('postPage', [
            'id' => $id,
            'userId' => $userId,
            'title' => $title,
            'body' => $body
        ]);
    }
}