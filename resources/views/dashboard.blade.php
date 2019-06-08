@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="/posts/create">Create Post</a>
                    <br><br><br>
                    @if(count($posts)>0)
                        <h1>YOUR POSTS</h1>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <th><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
                                    <th>
                                        <form class="float-right" action="{{action('PostsController@destroy',$post->id)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <h1>No Posts</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
