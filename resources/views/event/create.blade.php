@extends('admin.layout')

@section('page_title', 'Event')
@section('event_select', 'active')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New</div>

                    <div class="card-body">
                        <form method="POST" action="/admin/event" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Event Title</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" value="{{ old('title') }}">

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="eventDescription" class="col-md-4 col-form-label text-md-right">Event
                                    Description</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('eventDescription') is-invalid @enderror"
                                        name="eventDescription" value="{{ old('eventDescription') }}">

                                    @error('eventDescription')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="eventImage" class="col-md-4 col-form-label text-md-right">Event Image</label>

                                <div class="col-md-6">
                                    <input type="file"
                                        class="form-control-eventImage @error('eventImage') is-invalid @enderror"
                                        name="eventImage" value="{{ old('eventImage') }}">

                                    @error('eventImage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="eventLocation" class="col-md-4 col-form-label text-md-right">Event
                                    Location</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('eventLocation') is-invalid @enderror"
                                        name="eventLocation" value="{{ old('eventLocation') }}">

                                    @error('eventLocation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="eventTime" class="col-md-4 col-form-label text-md-right">Event Time</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('eventTime') is-invalid @enderror"
                                        name="eventTime" value="{{ old('eventTime') }}">

                                    @error('eventTime')
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
