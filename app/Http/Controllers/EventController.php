<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{

    public function event()
    {
        $events = Event::all();
        return view('event', compact('events'));
    }

    public function index()
    {
        $events = Event::all();
        return view('event.index', compact('events'));
    }

    public function create()
    {
        return view('event.create');
    }


    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'eventDescription' => 'required',
            'eventImage' => ['required', 'image'],
            'eventLocation' => 'required',
            'eventTime' => 'required',
        ]);

        $imagePath = request('eventImage')->store('uploadsEvents', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        Event::create([
            'title' => $data['title'],
            'eventDescription' => $data['eventDescription'],
            'eventImage' => $imagePath,
            'eventLocation' => $data['eventLocation'],
            'eventTime' => $data['eventTime'],
        ]);

        return redirect('admin/event/index');
    }


    public function show(Event $event)
    {
        $events = Event::all();
        return view('event.show', [
            'event' => $event,
            'events' => $events,
        ]);
    }

    public function delete(Request $request, $id)
    {
        $model = Event::find($id);
        $model->delete();

        $request->session()->flash('message', 'Event Deleted Successfully');

        return redirect('/admin/event/index');
    }
}
