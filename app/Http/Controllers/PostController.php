<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    function displayPosts()
    {
        
    }

    public function allPosts()
    {
        if(Cache::has('posts'))
        {
            $posts = Cache::get('posts');
        }
        else
        {
            $posts = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/posts"), true);
            Cache::put('posts', $posts, $seconds = 300);
        }
        return view('posts', [
            'posts' => $posts,
        ]);
    }

    public function individualPost($id)
    {
        if(!Cache::has('posts'))
        {
            $posts = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/posts"), true);
            Cache::put('posts', $posts, $seconds = 300);
        }
        $cache = Cache::get('posts');
        $post = $cache[$id-1];
        $userId = $post['userId'];
        $title = $post['title'];
        $body = $post['body'];
        return view('postPage', [
            'id' => $id,
            'userId' => $userId,
            'title' => $title,
            'body' => $body
        ]);
    }
}
