<?php

namespace App\Http\Controllers;

use App\Http\Resources\BeritaCollection;
use App\Models\Berita;
use Inertia\Inertia;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $news = new BeritaCollection(Berita::OrderByDesc('id')->paginate(10));
        return Inertia::render('Homepage', [
            'title' => "CepatNews | Home",
            'description' => "Selamat Datang di Halaman Utama CepatNews",
            'news' => $news,
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new Berita();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->category = $request->category;
        $news->author = auth()->user()->email;
        $news->save();
        return redirect()->back()->with('message', 'Berita Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelBerita  $modelBerita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $news)
    {
        $myNews = $news::where('author', auth()->user()->email)->get();
        return Inertia::render('Dashboard', [
            'myNews' => $myNews,
        ]);
    }

    public function edit(Berita $news)
    {
        //
    }


    public function update(Request $request, Berita $news)
    {
        //
    }


    public function destroy(Berita $news)
    {
        //
    }
}
