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
        return view('admin.aduan.detailAduan', ['title' => 'Detail Aduan', 'aduan' => $aduan]);
    }

    public function editAduan($id)
    {
        $aduan = Event::findOrFail($id);
        return view('admin.aduan.editAduan', ['title' => 'Edit Aduan', 'aduan' => $aduan]);
    }

    public function updateAduan(Request $request, $id)
    {

        $aduan = Event::findOrFail($id);
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
            if ($aduan->image && file_exists(public_path('images/' . $aduan->image))) {
                unlink(public_path('images/' . $aduan->image));
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $aduan->image = $imageName;
        }

        $aduan->status = $request->input('status') ?? 'pending'; // Menggunakan nilai default 'pending' jika tidak diisi
        $aduan->judul = $request->judul;
        $aduan->event_date = $request->date;
        $aduan->deskripsi = $request->deskripsi;
        $aduan->alamat = $request->alamat;
        $aduan->kota = $request->kota;
        $aduan->gmaps = $request->gmaps;
        $aduan->wagrup = $request->wagrup;
        $aduan->volunteer = $request->input('volunteer') ?? 0; // Menggunakan nilai default 0 jika tidak diisi
        $aduan->partisipan = $request->input('partisipan') ?? 0;
        $aduan->save();

        return redirect()->route('admin.dashboard')->with('success', 'Event berhasil ditambahkan');
    }

    public function deleteAduan($id)
    {
        $aduan = Event::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($aduan->image && file_exists(public_path('images/' . $aduan->image))) {
            unlink(public_path('images/' . $aduan->image));
        }

        $aduan->delete();
        return redirect()->route('admin.dashboard');
    }
}
