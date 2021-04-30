@extends('admin.layout')

@section('page_title', 'VolunteerRequest')

@section('volunteerRequest_select', 'active')

@section('container')
    <div class="row">
        <div class="col-9">
            <h1>Volunteer Request</h1>
        </div>

    </div>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->

            <div class="text text-success mb-1">
                {{ session('message') }}
            </div>

            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $list)
                            <tr>
                                <td>{{ $list->id }}</td>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->email }}</td>
                                <td>{{ $list->message }}</td>
                                <td>{{ $list->created_at }}</td>

                                <td>
                                    <a href="{{ url('admin/volunteerRequest/delete') }}/{{ $list->id }} "
                                        class="btn btn-danger">
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
