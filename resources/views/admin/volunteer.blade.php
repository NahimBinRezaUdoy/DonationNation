@extends('admin.layout')

@section('page_title', 'Volunteer')
@section('volunteer_select', 'active')

@section('container')
    <div class="row">
        <div class="col-9">
            <h1>Volunteer</h1>
        </div>
        <div class="col-2">
            <a href="{{ url('admin/volunteer/manage_volunteer') }}">
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
                            <th>Volunteer Name</th>
                            <th>Volunteer Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $list)
                            <tr>
                                <td>{{ $list->id }}</td>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->email }}</td>
                                <td>
                                    <a href="{{ url('admin/volunteer/manage_volunteer') }}/{{ $list->id }}"
                                        class="btn btn-primary mr-2">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>

                                    <a href="{{ url('admin/volunteer/delete') }}/{{ $list->id }} "
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
