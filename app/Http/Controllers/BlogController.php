<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function index()
    {
        $blog = Blog::all();
        return view('admin.blog.index', ['title' => 'Event', 'blog' => $blog]);
    }

    public function indexUser()
    {
        $blog = Blog::all();
        return view('user.blog', ['title' => 'blog', 'blog' => $blog]);
    }

    public function detailBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.detailBlog', ['title' => 'Detail Blog', 'blog' => $blog]);
    }

    public function detailBlogUser($id)
    {
        $blog = Blog::findOrFail($id);
        return view('user.detailBlogUser', ['title' => 'Detail Blog', 'blog' => $blog]);
    }

    public function addBlog()
    {
        return view('admin.blog.addBlog', ['title' => 'Add Blog']);
    }

    public function saveBlog(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:9999',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:9999',

        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $blog = new Blog();
        $blog->author_id = Auth::id();
        $blog->judul = $request->judul;
        $blog->deskripsi = $request->deskripsi;
        $blog->image = $imageName;
        $blog->save();

        return redirect()->route('admin.dashboard')->with('success', 'Event berhasil ditambahkan');
    }

    public function editBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.editBlog', ['title' => 'Edit blog', 'blog' => $blog]);
    }

    public function updateBlog(Request $request, $id)
    {

        $blog = Blog::findOrFail($id);
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:9999',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($blog->image && file_exists(public_path('images/' . $blog->image))) {
                unlink(public_path('images/' . $blog->image));
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $blog->image = $imageName;
        }

        $blog->author_id = Auth::id();
        $blog->judul = $request->judul;
        $blog->deskripsi = $request->deskripsi;
        $blog->image = $imageName;
        $blog->save();

        return redirect()->route('admin.dashboard')->with('success', 'Event berhasil ditambahkan');
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($blog->image && file_exists(public_path('images/' . $blog->image))) {
            unlink(public_path('images/' . $blog->image));
        }

        $blog->delete();
        return redirect()->route('admin.dashboard');
    }
}
