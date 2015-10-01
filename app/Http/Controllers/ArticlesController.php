<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\HttpResponse;
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
    
    public function store(CreateArticleRequest $request){
                
        Article::create($request->all());
        
        return redirect('articles');
    }
}
