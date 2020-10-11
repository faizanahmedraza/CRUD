@extends('layouts.main')

@section('body')
<section style="padding-top: 20px;">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <h2 class="mr-auto">All Posts</h2>
                    <a href="{{route('posts.create')}}" class="btn btn-dark">Add New Article</a>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('post-deleted'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('post-deleted')}}</strong>
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{ Str::limit($post->description, 25) }}</td>
                            <td>
                                <a href="{{route('posts.show',['post'=>$post->id])}}"
                                    class="btn btn-success my-1">View</a>
                                <a href="{{route('posts.edit',['post'=>$post->id])}}"
                                    class="btn btn-primary my-1">Edit</a>
                                <a href="{{route('deletepost',['post'=>$post->id])}}"
                                    class="btn btn-danger my-1">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection