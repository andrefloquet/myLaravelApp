@extends("layout")

@section("content")  
    <h1 class="display-4">Create Article</h1>
    <form method="POST" action="/article">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" 
                    class="form-control" 
                    id="title" 
                    name="title"
                    value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="excerpt">Excerpt</label>
            <textarea class="form-control" 
                        id="excerpt" 
                        name="excerpt">
                {{ old('excerpt') }}
            </textarea>
        </div>    
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" 
                        id="body" 
                        name="body">
                {{ old('body') }}
            </textarea>
        </div>  
        <button type="submit" class="btn btn-primary">Save</button> 
        <a class="btn btn-secondary" href="/article">Cancel</a>        
    </form>
@endsection