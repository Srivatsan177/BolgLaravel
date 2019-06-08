@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{action('PostsController@update',$post->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        <input type="text" class="form-control" name="title" placeholder="Title" value="{{$post->title}}">
        <br>
        <textarea name="body" cols="30" rows="10" class="form-control" placeholder="Body Text">{{$post->body}}</textarea>
        <br>
        <input type="file" name="cover_image">
        <input type="submit" name="Submit" class="btn btn-primary">
    </form>
@endsection