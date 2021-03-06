@extends('template')

@section('container')
<article class="mb-5">
    <h3>{{ $article->title }}</h3>
    <h6 class="text-decoration-none">By: {{ $article->author->username }} in 
        <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none"> {{ $article->category->name  }} </a>
    </h6>

    {!! $article->body !!}

    <a href="/article" class="text-decoration-none d-block mt-3">Back</a>
</article>
@endsection