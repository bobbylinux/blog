@extends('layouts.master')
@section('content')
<div class="col-md-8 blog-main">
    <h1>Create a post</h1>
    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="title">Body</label>
            <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>

        @include('layouts.errors')
    </form>
</div>
@endsection