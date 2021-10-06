@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add New Category</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Category Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                    name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="color">Category Color</label>
                                <input type="color" class="form-control" id="color" name="color" required>
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
                    @foreach ($categories as $category)
                        <div class="col-md-4 mt-2 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $loop->iteration }}. {{ $category->title }}</h5>
                                    <p class="card-text" style="background-color: {{ $category->color }};">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {!! $categories->render() !!}
            </div>
        </div>
    </div>
@endsection
