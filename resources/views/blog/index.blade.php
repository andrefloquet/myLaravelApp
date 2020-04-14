@extends("layout")

@section("content") 
    @foreach ($articles as $article) 
    <div class="title m-b-md">
        <h1>
            <a href="/blog/{{ $article->id }}">{{ $article->title }}</a>
        </h1>
        <p>{{ $article->excerpt }}</p>
        <br /><br />
    </div>
    @endforeach
@endsection