@extends('admin.layout')

@section('page_title', 'Cause')
@section('cause_select', 'active')

@section('container')
    <div class="row">
        <div class="col-9">
            <h1>Causes</h1>
        </div>
        <div class="col-2">
            <a href="{{ url('admin/cause/create') }}">
                <button type="button" class="btn btn-success">Add New</button>
            </a>
        </div>
    </div>
    <div class="row m-t-30">
        <div class="col-md-12">

            <div class="text text-success mb-1">
                {{ session('message') }}
            </div>
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40 ">
                <table class="table table-borderless table-data3 ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($causes as $cause)
                            <tr>
                                <td>{{ $cause->id }}</td>
                                <td>{{ $cause->caption }}</td>
                                <td>{{ $cause->description }}</td>
                                <td><img src="/storage/{{ $cause->image }}" style="width: 100px"></td>
                                <td>
                                    <a href="{{ url('admin/cause/delete') }}/{{ $cause->id }} "
                                        class="btn btn-danger ">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
