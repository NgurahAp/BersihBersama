<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function addEvent()
    {
        return view('admin.event.addEvent', ['title' => 'Add Event']);
    }

    public function saveEvent(Request $request)
    {
        $request->validate([
            'judul' => 'required|integer',
            'deskripsi' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'kota' => 'required|string|max:10',
            'gmaps' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'wagrup' => 'required|string|max:255',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $event = new Event();
        $event->judul = $request->judul;
        $event->deskripsi = $request->deskripsi;
        $event->alamat = $request->alamat;
        $event->kota = $request->kota;
        $event->gmaps = $request->gmaps;
        $event->image = $imageName;
        $event->wagrup = $request->wagrup;
        $event->save();

        return redirect()->route('admin.dashboard')->with('success', 'event berhasil ditambahkan');
    }
}
