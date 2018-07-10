@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title">Blog Title</label>

                                <input id="text" type="text" class="form-control" name="title" required autofocus>
                            
                        </div>

                        <div class="form-group row">
                            <label for="Body">Blog post</label>
                            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Post Blog
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
