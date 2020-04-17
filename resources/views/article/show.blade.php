@extends("layout")

@section("content") 
    <br>
    <form method="POST" action="{{ route('article.destroy', $article) }}">
        @csrf
        @method('DELETE')     

        <a class="btn btn-info" href="/article">Go Back</a>
        <a class="btn btn-primary" href="{{ $article->path() }}/edit">Update Article</a>
        <!-- TODO: improve confirm -->
        <input type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Confirm to delete article.');">
    </form>   
    <br><br>    
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->excerpt }}</p>
    <p>{{ $article->body }}</p>
@endsection