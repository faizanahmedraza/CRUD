@extends('layouts.main')
@section('body')
    <div class="container text-center mt-5">
       <h2>Welcome TO Laravel CRUD Using Eloquent ORM </h2>
        <a href="{{route('all.articles')}}" class="btn btn-primary btn-lg">Click Here</a>
    </div>
@endsection