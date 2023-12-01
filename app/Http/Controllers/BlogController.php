<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use app\Models\Article;


class BlogController extends Controller
{
    //
    Public function index(){
        return view('blog.index');
        // $data = Article::all();
        // return view('blog.index')->with('data', $data);
    }
}
