@extends('layouts.master')
@section('content')
<div class="col-md-8 blog-main">
    <h1>{{$post->title}}</h1>

    @if (count($post->tags))
        <ul>
            @foreach($post->tags as $tag)
                <li>
                    <a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a></li>
            @endforeach
        </ul>
    @endif
    <p>{{ $post->body }}</p>
    <hr>
    <div class="comments">
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}: &nbsp;
                    </strong>

                    {{$comment->body}}
                </li>
            @endforeach
        </ul>
    </div>
    <hr>
    <div class="card">
        <div class="card-block">
            <form action="/posts/{{$post->id}}/comments" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" id="" cols="30" rows="10" placeholder="Your comment here" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </form>
            @include('layouts.errors')
        </div>
    </div>
</div>
@endsection