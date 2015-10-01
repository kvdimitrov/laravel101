@extends('templates.app');
@section('content')
<h1>About {{ $about_title }}</h1>
<p>{{ $about_text }}</p>
<p><a href='/'>{{ $back }}</a></p>
@stop
@section('footer')
<footer>
    
</footer>
@stop
