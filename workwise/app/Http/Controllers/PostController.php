<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function jobData()
    {
        $id = auth()->user()->id;
        $posts = DB::table('posts')
            ->join('users', 'users.id', 'posts.user_id',)->get();
        return view('layouts.allPost', ['posts' => $posts]);
    }
    public function jobAllData(Request $request)
    {

        // $posts = Post::all();
        $posts = DB::table('posts')
            ->join('users', 'users.id', 'posts.user_id')->select('*')->get();


        if (!is_null($request->job_type)) {
            $posts = $posts->where("job_type", "LIKE", "%{$request->job_type}%");
        }


        return view('layouts.allPost', ['posts' => $posts]);
    }
}
