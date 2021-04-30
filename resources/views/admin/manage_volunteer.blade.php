@extends('admin.layout')

@section('page_title', 'Manage Volunteer')

@section('volunteer_select', 'active')

@section('container')
    <div class="row">
        <div class="col-9">
            <h1>Manage volunteer</h1>
        </div>
        <div class="col-2">
            <a href="{{ url('admin/volunteer') }}">
                <button type="button" class="btn btn-success">Back</button>
            </a>
        </div>
    </div>
    <div class="row m-t-30">
        <div class="col-md-12 ">

            <div class="text text-success mb-1">
                {{ session('message') }}
            </div>

            <!-- Create Form-->
            <div class="row">
                <div class="col-lg-11 center">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('volunteer.manage_volunteer_process') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Volunteer Name</label>
                                    <input id="name" name="name" value="{{ $name }}" type="text"
                                        class="form-control" aria-required="true" aria-invalid="false" required>

                                    @error('name')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email" class="control-label mb-1">Volunteer Email</label>
                                    <input id="email" name="email" value="{{ $email }}" type="text"
                                        class="form-control" aria-required="true" aria-invalid="false" required>

                                    @error('email')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        Submit
                                    </button>
                                </div>
                                <input type="hidden" name="id" value="{{ $id }}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Form-->
        </div>
    </div>
@endsection
