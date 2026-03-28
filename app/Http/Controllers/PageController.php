<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello()
    {
        return view('hello', ['name' => 'Athira']);
    }

    public function posts()
    {
        $posts = [
            ['id' => 1, 'title' => 'First Post', 'description' => 'This is first post'],
            ['id' => 2, 'title' => 'Second Post', 'description' => 'This is second post'],
            ['id' => 3, 'title' => 'Third Post', 'description' => 'This is third post'],
        ];

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $posts = [
            ['id' => 1, 'title' => 'First Post', 'description' => 'This is first post'],
            ['id' => 2, 'title' => 'Second Post', 'description' => 'This is second post'],
            ['id' => 3, 'title' => 'Third Post', 'description' => 'This is third post'],
        ];

        // find the selected post
        $post = null;
        foreach ($posts as $p) {
            if ($p['id'] == $id) {
                $post = $p;
            }
        }

        return view('posts.show', compact('post'));
    }
}
