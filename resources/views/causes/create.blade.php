@extends('admin.layout')

@section('page_title', 'Cause')
@section('cause_select', 'active')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Cause</div>

                    <div class="card-body">
                        <form method="POST" action="/admin/cause" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="caption" class="col-md-4 col-form-label text-md-right">Caption</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('caption') is-invalid @enderror"
                                        name="caption" value="{{ old('caption') }}">

                                    @error('caption')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('description') is-invalid @enderror"
                                        name="description" value="{{ old('description') }}">

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control-image @error('image') is-invalid @enderror"
                                        name="image" value="{{ old('image') }}">

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
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
