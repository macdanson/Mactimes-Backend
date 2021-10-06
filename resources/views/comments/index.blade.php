@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row justify-content-left">
                    @foreach ($comments as $comment)
                        <div class="col-md-12 mt-2 mb-2">
                            <div class="card">
                                <div class="card-body ">
                                    <h5 class="card-title">{{ $comment->author->name }}</h5>
                                    <p class="card-text">{{ $comment->content }}</p>
                                    <div class="text-right"><a href="{{ $comment->post->link() }}"
                                            class="btn btn-primary btn-sm ">Go to post</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {!! $comments->render() !!}
            </div>

        </div>
    </div>
@endsection
