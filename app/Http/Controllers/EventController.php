<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $event = Event::where('status', 'disetujui')->latest()->get();
        return view('admin.event.index', ['title' => 'Event', 'event' => $event]);
    }

    public function indexUser()
    {
        $event = Event::where('status', 'disetujui')->latest()->get();
        return view('user.event', ['title' => 'Event', 'event' => $event]);
    }


    public function detailEvent($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.detailEvent', ['title' => 'Detail Event', 'event' => $event]);
    }

    public function detailEventUser($id)
    {
        $event = Event::findOrFail($id);
        return view('user.detailEventUser', ['title' => 'Detail Event', 'event' => $event]);
    }


    public function addEvent()
    {
        return view('admin.event.addEvent', ['title' => 'Add Event']);
    }

    public function saveEvent(Request $request)
    {
        $request->validate([
            'status' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:500',
            'alamat' => 'required|string|max:255',
            'kota' => 'required|string|max:15',
            'gmaps' => 'required|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'volunteer' => 'nullable|numeric',
            'partisipan' => 'nullable|numeric',
            'wagrup' => 'required|string|max:500',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $event = new Event();
        $event->status = $request->input('status') ?? 'pending'; // Menggunakan nilai default 'pending' jika tidak diisi
        $event->judul = $request->judul;
        $event->event_date = $request->input('date') ?? now()->toDateString();
        $event->deskripsi = $request->deskripsi;
        $event->alamat = $request->alamat;
        $event->kota = $request->kota;
        $event->gmaps = $request->gmaps;
        $event->image = $imageName;
        $event->wagrup = $request->wagrup;
        $event->volunteer = $request->input('volunteer') ?? 0; // Menggunakan nilai default 0 jika tidak diisi
        $event->partisipan = $request->input('partisipan') ?? 0;
        $event->save();

        return redirect()->route('admin.dashboard')->with('success', 'Event berhasil ditambahkan');
    }

    public function editEvent($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.editEvent', ['title' => 'Edit Event', 'event' => $event]);
    }

    public function updateEvent(Request $request, $id)
    {

        $event = Event::findOrFail($id);
        $request->validate([
            'status' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:500',
            'alamat' => 'required|string|max:255',
            'kota' => 'required|string|max:15',
            'gmaps' => 'required|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'volunteer' => 'nullable|numeric',
            'partisipan' => 'nullable|numeric',
            'wagrup' => 'required|string|max:500',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($event->image && file_exists(public_path('images/' . $event->image))) {
                unlink(public_path('images/' . $event->image));
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $event->image = $imageName;
        }

        $event->status = $request->input('status') ?? 'pending'; // Menggunakan nilai default 'pending' jika tidak diisi
        $event->judul = $request->judul;
        $event->event_date = $request->date;
        $event->deskripsi = $request->deskripsi;
        $event->alamat = $request->alamat;
        $event->kota = $request->kota;
        $event->gmaps = $request->gmaps;
        $event->wagrup = $request->wagrup;
        $event->volunteer = $request->input('volunteer') ?? 0; // Menggunakan nilai default 0 jika tidak diisi
        $event->partisipan = $request->input('partisipan') ?? 0;
        $event->save();

        return redirect()->route('admin.dashboard')->with('success', 'Event berhasil ditambahkan');
    }

    public function deleteEvent($id)
    {
        $event = Event::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($event->image && file_exists(public_path('images/' . $event->image))) {
            unlink(public_path('images/' . $event->image));
        }

        $event->delete();
        return redirect()->route('admin.dashboard');
    }
}
