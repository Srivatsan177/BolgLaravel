@extends('layouts.app')

@section('content')
<br><br>
    @if (count($posts)>0)
        <h1>Posts</h1>
        <ul class="list-group">
        @foreach ($posts as $post)
        <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        </ul>
    @else
        <h2>No Posts</h2>
    @endif
@endsection