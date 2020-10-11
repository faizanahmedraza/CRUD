<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('post.index')->with('posts',$posts);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'unique:posts', 'max:150'],
            'description' => ['required'],
        ]);

        DB::table('posts')->insert([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return back()->with('post_created','Post has been successfully created!!');
    }

    public function show($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return view('post.show',compact('post'));
    }

    public function edit($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return view('post.edit',compact('post'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'unique:posts', 'max:150'],
            'description' => ['required'],
        ]);
        
        DB::table('posts')->where('id',$id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return back()->with('post_updated','Post has been successfully updated!!');
    }

    public function destroy($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('post_deleted','Post has been successfully deleted!!');
    }
}
