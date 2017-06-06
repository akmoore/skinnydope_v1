<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\BlurbRequest;
use App\Http\Controllers\Controller;
use App\SkinnyDope\Interfaces\BlurbInterface;

class BlurbController extends Controller
{
    protected $blurb;

    public function __construct(BlurbInterface $blurb){
        $this->blurb = $blurb;
    }
     
    public function index()
    {
        $blurbs = $this->blurb->getRecords();
        return view('admin.blurbs.index', compact('blurbs'));
    }

    public function create(){
        return view('admin.blurbs.create');
    }

    public function store(BlurbRequest $request)
    {
        $blurb = $this->blurb->addRecord($request);
        return redirect()->route('blurbs.show', $blurb)->with('message', 'Blurb successfully created.');
    }

    public function show($id)
    {
        $blurb = $this->blurb->getRecord($id);
        if($blurb) return view('admin.blurbs.show', compact('blurb'));
        return redirect()->route('blurbs.index')->with('message', 'Blurb does not exist.');
    }

    public function edit($id){
        $blurb = $this->blurb->getRecord($id);
        if($blurb) return view('admin.blurbs.edit', compact('blurb'));
        return redirect()->route('blurbs.index')->with('message', 'Blurb does not exist.');
    }

    public function update(BlurbRequest $request, $id)
    {
        $blurb = $this->blurb->updateRecord($request, $id);
        if($blurb) return redirect()->route('blurbs.show', $blurb)->with('message', 'Blurb was successfully updated.');
        return redirect()->route('blurbs.index')->with('message', 'Blurb does not exist.');
    }

    public function destroy($id)
    {
        $blurb = $this->blurb->deleteRecord($id);
        if($blurb) return redirect()->route('blurbs.index')->with('message', 'Blurb was successfully deleted.');
        return redirect()->route('blurbs.index')->with('error', 'Blurb does not exist.');
    }
}
