@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="{{ route('tags.store') }}" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add New Tag</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Tag Name</label>
                                <input type="text" class="form-control @error('tag') is-invalid @enderror" id="tag"
                                    name="tag" value="{{ old('tag') }}" required>
                                @error('tag')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="row justify-content-left">
                    @foreach ($tags as $tag)
                        <div class="col-md-3 mt-2 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $loop->iteration }}. {{ $tag->tag }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {!! $tags->render() !!}
            </div>

        </div>
    </div>
@endsection
