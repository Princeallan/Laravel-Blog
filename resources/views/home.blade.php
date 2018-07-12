@extends('layouts.app')

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
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>body</th>
                                <th>Author</th>
                                <th>Learn more</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($posts)
                                @foreach($posts as $post)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->body }}</td>
                                        <td>{{ $post->user->name }}</td>
                                        <td>
                                            <a href="{{ route('posts.show', ['id' => $post->id]) }}">view more</a>
                                        </td>
                                        <td>
                                            {!!Form::open(['action'=>['PostController@destroy', $post->id], 'method' => 'POST', 'class'=>'pull-right'])!!}

                                            {{Form::hidden('_method','DELETE')}}
                                            {{FORM::submit('DELETE', ['class'=> 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>

                                        {{--<td>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }}</td>--}}
                                    </tr>
                                @endforeach
                            @else
                                <p class="text-center text-primary">No Posts created Yet!</p>
                            @endif
                        </table><Br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
