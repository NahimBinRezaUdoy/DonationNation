@extends('admin.layout')

@section('page_title', 'Donate')
@section('donate_select', 'active')

@section('container')
    <div class="row">
        <div class="col-9">
            <h1>Donate</h1>
        </div>
        <div class="col-2">
            <a href="{{ url('admin/donate/create') }}">
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
                            <th>Image</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Reason</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donate as $do)
                            <tr>
                                <td>{{ $do->id }}</td>
                                <td><img src="/storage/{{ $do->image }}" style="width: 100px"></td>
                                <td>{{ $do->name }}</td>
                                <td>{{ $do->amount }}</td>
                                <td>{{ $do->reason }}</td>

                                <td>
                                    <a href="{{ url('admin/donate/delete') }}/{{ $do->id }} "
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
