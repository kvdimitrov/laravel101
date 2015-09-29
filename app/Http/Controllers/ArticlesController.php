<?php

namespace App\Http\Controllers;
use App\Article;
//use Illuminate\Http\Request;
// use App\Http\Requests;
use Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::latest('published_at')->published()->get();
        
        return view('pages/articles', compact('articles'));
    }
    
    public function show($id){
        $article = Article::findOrFail($id);       
        
        return view('pages/show', compact('article'));
    }
    
    public function create(){
        return view('pages/create');
    }
    
    public function store(){
        
        
        
        Article::create(Request::all());
        
        return redirect('articles');
    }
}
