<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\HttpResponse;

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
    
    public function store(ArticleRequest $request){
                
        Article::create($request->all());
        
        return redirect('articles');
    }

    public function edit($id){

        $article = Article::findOrFail($id);
        return view('pages/edit', compact('article'));
    }

    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect('articles');
    }
}
