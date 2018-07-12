@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                    <div class="card mb-4">
                        <div class="card-header">{{$post->title}}</div>
                        <div class="card-body">{{$post->body}}</div>
                        <div>By: {{$post->user->name}} | On {{$post->created_at}} </div>
                    </div>

            </div>
        </div>
    </div>

@endsection
