@extends('layouts.app')

@section('content')
    <br>
    <a href="/posts" class="btn btn-default">Go Back</a>
    <br>
    <h1>{{$post->title}}</h1>
    <img style="width:50%;" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <p>{{$post->body}}</p>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    @if (!Auth::guest())
        @if(Auth::user()->id==$post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
            <form class="float-right" action="{{action('PostsController@destroy',$post->id)}}" method="post">
                @method('DELETE')
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        @endif
    @endif
@endsection