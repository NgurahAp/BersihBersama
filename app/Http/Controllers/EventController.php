<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function addEvent()
    {
        return view('admin.event.addEvent', ['title' => 'Add Event']);
    }
}
