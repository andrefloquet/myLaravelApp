@extends("layout")

@section("content") 
    <div class="title m-b-md">
    <h1><a href="/blog/{{ $article->id }}/edit">{{ $article->title }}</a></h1>
        <p>{{ $article->excerpt }}</p>
        <p>{{ $article->body }}</p>
    </div>
@endsection