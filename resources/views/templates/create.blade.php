@extends('layouts.app')
@section('content')
<!-- <style>
.cont {
    position:relative;
    top: 50px;
}
</style> -->
<div class="jumbotron">
    @if(session('templateSuccess'))
    <div class="alert alert-success">{{session('templateSuccess')}}</div>
    @endif
    <h1>Create Templates</h1>
    <form class="card" action="{{ route('uploadTemplate') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Template Name') }}</label>

            <div class="col-md-6">
                <input  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter template name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Template Description') }}</label>

            <div class="col-md-6">
                <input  type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" placeholder="Enter template description">

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <input  type="number" class="form-control @error('description') is-invalid @enderror" name="category_id" value="{{ old('category_id') }}" placeholder="Enter category ID">
        @error('category_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

        <div class="container">
        <div class="form-group row mb-0">
            Select image to upload:
            <input  type="file"  class="form-control @error('template_file') is-invalid @enderror" name="template_file" value="{{ old('template_file') }}">
            
            @error('template_file')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group row">
             <input type="submit" value="Upload Template" name="submit">
        </div>
        </div>
    </form>
</div>



@endsection