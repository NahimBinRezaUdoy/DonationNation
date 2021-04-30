@extends('admin.layout')

@section('page_title', 'Event')
@section('event_select', 'active')

@section('container')
    <div class="row">
        <div class="col-9">
            <h1>Events</h1>
        </div>
        <div class="col-2">
            <a href="{{ url('admin/event/create') }}">
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
                            <th>Event Image</th>
                            <th>Event Location</th>
                            <th>Event Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->eventDescription }}</td>
                                <td><img src="/storage/{{ $event->eventImage }}" style="width: 100px"></td>
                                <td>{{ $event->eventLocation }}</td>
                                <td>{{ $event->eventTime }}</td>
                                <td>
                                    <a href="{{ url('admin/event/delete') }}/{{ $event->id }} "
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
