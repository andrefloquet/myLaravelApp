@extends("layout")

@section("content") 
<h1 class="display-3">Create Article</h1>
<form method="POST" action="/blog">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="excerpt">Excerpt</label>
        <textarea class="form-control" id="excerpt" name="excerpt" rows="3"></textarea>
    </div>    
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" name="body" rows="3"></textarea>
    </div>  
    <button type="submit" class="btn btn-primary">Save</button>     
</form>

@endsection