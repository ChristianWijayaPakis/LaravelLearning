@extends('layout.app')

@section('content')
<br><br>
<h1>{{$post->title}}</h1>
<div>
    <br><br>
    {!!$post->body!!}
    
</div>
<hr>
<small>Written on {{$post->created_at}}</small>
<hr>
<a href="/lsapp/public/posts" class="btn btn-default">Go back</a>
<a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
@endsection