@extends('layouts.main')

@section('body')
<section style="padding-top: 60px;">
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h4>Article Details</h4>
            </div>
            <div class="card-body">
                <h2 class="card-text">{{$article->title}}</h2>
                <p class="card-text">{{$article->description}}</p>
            </div>
            <div class="card-footer">
                <div class="card-text">Last Updated at: {{$article->updated_at->format('m/d/Y')}}</div>
            </div>
        </div>
    </div>
</section>
@endsection