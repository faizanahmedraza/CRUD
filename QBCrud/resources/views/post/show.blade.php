@extends('layouts.main')

@section('body')
<section style="padding-top: 60px;">
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h4>Post Details</h4>
            </div>
            <div class="card-body">
                <h2 class="card-text">{{$post->title}}</h2>
                <p class="card-text">{{$post->description}}</p>
            </div>
            <div class="card-footer">
                <div class="card-text">Last Updated at: {{$post->updated_at}}</div>
            </div>
        </div>
    </div>
</section>
@endsection