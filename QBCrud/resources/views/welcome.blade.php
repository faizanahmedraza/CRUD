@extends('layouts.main')
@section('body')
    <div class="container text-center mt-5">
       <h2>Welcome TO Laravel CRUD Using QueryBuilder </h2>
        <a href="{{route('posts.index')}}" class="btn btn-primary btn-lg">Click Here</a>
    </div>
@endsection