<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function index()
    {
        $aduan = Event::where('status', 'pending')->latest()->get();
        return view('admin.aduan.index', ['title' => 'Event', 'aduan' => $aduan]);
    }

    public function detailAduan($id)
    {
        $aduan = Event::findOrFail($id);
        return view('admin.aduan.detailAduan', ['title' => 'Detail Event', 'aduan' => $aduan]);
    }
}
