<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticles()
    {
        $articles = Article::all();
        return view('article.index',compact('articles'));
    }

    public function addArticle()
    {
        return view('article.create');
    }

    public function storeArticle(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:articles|max:150',
            'description' => 'required'
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->save();
        return back()->with('article-created','Article has been Successfully Created!!');
    }

    public function showArticle($id)
    {
        $article = Article::where('id',$id)->first();
        return view('article.show', compact('article'));
    }

    public function editArticle($id)
    {
        $article = Article::where('id',$id)->first();
        return view('article.edit',compact('article'));
    }

    public function updateArticle(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:150',
            'description' => 'required'
        ]);
        $article = Article::where('id',$request->id)->first();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->save();
        return back()->with('article-updated','Article has been successfully updated!!');
    }

    public function deleteArticle($id)
    {
        Article::where('id',$id)->delete();
        return back()->with('article-deleted','Article has been Successfully deleted!!');
    }
}
