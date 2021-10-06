@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="card">
                <h5 class="card-header">{{ $post->post_type }}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <hr>
                    @if ($post->comments->count())
                        @foreach ($post->comments as $comment)
                            <div class="card-body">
                                <h5 class="card-title">{{ $comment->author->name }}</h5>
                                <p class="card-text">{{ $comment->content }}</p>
                            </div>
                        @endforeach
                    @endif
                    <hr>
                    @if ($post->images->count())
                        @foreach ($post->images as $image)
                            <div class="row">
                                <div class="col-3">
                                    <img class="img-fluid" src="{{ $image->url }}" alt="Card image cap">
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>

        </div>
    </div>
@endsection
