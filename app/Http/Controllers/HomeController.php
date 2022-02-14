<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use App\Category;
use App\Post;
use App\Tag;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function create(){

        $categories = Category::all();
        $tags = Tag::all();
        return view('create' , compact('categories','tags'));
    }

    public function store( Request $request){

        $data = $request ->validate([
            "titolo" =>"required|string|min:3",
            "sottotitolo" =>"nullable|string",
        ]);

        $user = Auth::user();
        $data['author'] = $user ->name;

        $post = Post::make($data);

        $category = Category::findOrFail($request -> get('category_id'));

        // dd('aaaa');
        if ($request ->get('tags')) {
            $tags = Tag::findOrFail($request ->get('tags'));
            $post -> category() -> associate($category);
            $post -> save();
            $post -> tags() ->attach($tags);
        }

        $post -> save();

        return redirect() -> route('home');

    }


}
