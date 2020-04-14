@extends("layout")

@section("content") 
<h1 class="display-3">Update Article</h1>
<form method="POST" action="/blog/{{ $article->id }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
    </div>
    <div class="form-group">
        <label for="excerpt">Excerpt</label>
        <textarea class="form-control" 
                    id="excerpt" 
                    name="excerpt" 
                    rows="3">{{ $article->excerpt }}</textarea>
    </div>    
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" 
                    id="body" 
                    name="body" 
                    rows="3">{{ $article->body }}</textarea>
    </div>  
    <button type="submit" class="btn btn-primary">Save</button>     
</form>

@endsection