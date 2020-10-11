@extends('layouts.main')

@section('body')
<section style="padding-top: 20px;">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <h2 class="mr-auto">All Articles</h2>
                    <a href="{{route('add.article')}}" class="btn btn-dark">Add New Article</a>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('article-deleted'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('article-deleted')}}</strong>
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
                        @foreach ($articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article->title}}</td>
                            <td>{{ Str::limit($article->description, 25) }}</td>
                            <td>
                                <a href="{{route('show.article',['article'=>$article->id])}}"
                                    class="btn btn-success my-1">View</a>
                                <a href="{{route('edit.article',['article'=>$article->id])}}"
                                    class="btn btn-primary my-1">Edit</a>
                                <a href="{{route('delete.article',['article'=>$article->id])}}"
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