<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$posts = Post::with(['category'])->get(); 

        //$posts = Post::paginate(6);

        $posts = Post::with(['category', 'tags'])->paginate(3);

        return response()->json(
            [
                'results' => $posts,
                'success' => true
            ]
        );

    }
    public function show($slug)
    {

        $post = Post::where('slug', '=', $slug)->with(['category', 'tags'])->first();

        if ($post) {
            return response()->json(
                [
                    'result' => $post,
                    'success' => true
                ]
            );
        } else {
            return response()->json(
                [
                    'result' => 'No results found',
                    'success' => false
                ]
            );
        }
    }

}
