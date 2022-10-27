@extends('layouts.app')

@section('content')
<div class="container">


    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <h3>Add New Post</h3>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label ">{{ __('Post Caption') }}</label>


                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                        name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>


                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label ">{{ __('Post Image') }}</label>

                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="row pt-4">
                    <button type="submit" class="btn btn-primary col-3">Add New Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection