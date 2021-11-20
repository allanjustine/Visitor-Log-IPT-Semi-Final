<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorLog;

class VisitorLogController extends Controller
{
    public function index() {
        $visitorlog = VisitorLog::orderByRaw('name,phone,purpose,time')->get();
        return view('visitorlog.index', ['visitorlog'=>$visitorlog]);
    }

    public function create() {
        return view('visitorlog.create');
    }
    public function store(Request $request) {
        $this->validate($request, [
            'name'     => 'required|required|regex:/^[\pL\s\-]+$/u|max:255|unique:visitorlog,name',
            'phone'    => 'required|numeric',
            'purpose'  => 'required',
            'time'     => 'required|numeric'
        ]);

        VisitorLog::create([
            'name'     => $request['name'],
            'phone'    => $request['phone'],
            'purpose'  => $request['purpose'],
            'time'     => ($request['time'])
        ]);

        return redirect('/visitorlog')->with('info', 'New visitor has been Added');

    }
}
