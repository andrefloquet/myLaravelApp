@extends("layout")

@section("content") 
    @if (count($articles) > 0)
        @foreach ($articles as $article) 
        <div class="title m-b-md">
            <h1>
                <a href="/blog/{{ $article->id }}">{{ $article->title }}</a>
            </h1>
            <p>{{ $article->excerpt }}</p>
            <br /><br />
        </div>
        @endforeach
        {{ $articles->links() }}
    @else 
        <p>No posts yet!</p>
    @endif
@endsection