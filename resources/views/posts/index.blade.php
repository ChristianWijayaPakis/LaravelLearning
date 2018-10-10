@extends('layout.app')

@section('content')
    <h1>Post</h1>
    @if(count($posts)>0)

        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                    <img style="width: 100%" src="/storage/cover_image/{{$post->cover_image}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8">

                    </div>
                </div>
            <h3><a href="/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        </div>   
        @endforeach
        {{$posts->links()}}
    @else
        <p>No post found</p>
        @endif
@endsection