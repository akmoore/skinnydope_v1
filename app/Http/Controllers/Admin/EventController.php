<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SkinnyDope\Interfaces\EventInterface;

class EventController extends Controller
{
    protected $event;

    public function __construct(EventInterface $event){
        $this->event = $event;
    }
     
    public function index()
    {
        $events = $this->event->getRecords();
        return view('admin.events.index', compact('events'));
    }

    public function create(){
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
    	// $date = $request->date_time;
    	// return \Carbon\Carbon::parse($request->date_time);

        $event = $this->event->addRecord($request);
        return redirect()->route('events.show', $event)->with('message', 'event successfully created.');
    }

    public function show($id)
    {
        $event = $this->event->getRecord($id);
        if($event) return view('admin.events.show', compact('event'));
        return redirect()->route('events.index')->with('message', 'event does not exist.');
    }

    public function edit($id){
        $event = $this->event->getRecord($id);
        if($event) return view('admin.events.edit', compact('event'));
        return redirect()->route('events.index')->with('message', 'event does not exist.');
    }

    public function update(Request $request, $id)
    {
        $event = $this->event->updateRecord($request, $id);
        if($event) return view('admin.events.show', compact('event'));
        return redirect()->route('events.index')->with('message', 'event does not exist.');
    }

    public function destroy($id)
    {
        $event = $this->event->deleteRecord($id);
        if($event) return redirect()->route('events.index')->with('message', 'event was successfully deleted.');
        return redirect()->route('events.index')->with('error', 'event does not exist.');
    }
}
