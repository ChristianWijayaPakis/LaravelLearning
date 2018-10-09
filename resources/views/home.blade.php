@extends('layout.app')

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
                            <a href="/lsapp/public/posts/create" class="btn btn-primary">Create Post</a>
                            <h3>Your blog post.</h3>
                            <table  class="table table-striped">
                                    <tr>
                                        <th>Title</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                        @foreach ($posts as $post)
                                        <tr>
                                        <th>{{$post->title}}</th>
                                        <th><a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
                                                <th></th>
                                        </tr>
                                        @endforeach
                            </table>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection