@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <a href="/dashboard" class="btn btn-default">Go Back</a>
    <br>
    <form action="{{action('PostsController@store')}}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        <input type="text" class="form-control" name="title" placeholder="Title">
        <br>
        <textarea name="body" cols="30" rows="10" class="form-control" placeholder="Body Text"></textarea>
        <br>
        <input type="file" name="cover_image">
        <br><br>
        <input type="submit" name="Submit" class="btn btn-primary">
    </form>
@endsection
