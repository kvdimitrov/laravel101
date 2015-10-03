@extends('templates/app');
@section('content')
<h1>Articles
</h1>@if(Auth::check())
    <a href="/articles/create">{{ $data['create'] }}</a>
@endif
<hr>
@foreach($articles as $article)
<article>
    <h2>
        <a href='/articles/{{ $article->id }}'>{{ $article->title }}</a>
    </h2>
    <div class='body'>
        {{ $article->body }}
    </div>
</article>
@endforeach
@stop

