@extends('layouts.main')

@section('body')
   <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header text-center">
                            Edit Article
                        </div>
                        <div class="card-body">
                            @if (Session::has('article-updated'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{Session::get('article-updated')}}</strong>
                                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <form method="POST" action="{{route('update.article',['article'=>$article->id])}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$article->id}}">

                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Article Title" value="{{$article->title}}">
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description">Description</label>
                                    <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter Article Description" rows="3">{{$article->description}}</textarea>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
@endsection