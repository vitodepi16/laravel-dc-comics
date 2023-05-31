<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use app\Http\Requests\StoreComicRequest;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $data = config('db_comics.footerLinks');
        return view('comics.index', compact('comics', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = config('db_comics.footerLinks');
        return view('comics.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255', 'min:2'],
            'thumb' => ['required'],
            'price' => ['required', 'min:0.99', 'numeric'],
            'series' => ['required', 'max:255', 'min:2'],
            'sale_date' => ['required', 'date', 'date_format:dd-mm-yyyy'],
            'description' => ['required']
        ]);
        $form_data = $request->all();
        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $data = config('db_comics.footerLinks');
        return view('comics.show', compact('comic', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $data = config('db_comics.footerLinks');
        return view('comics.edit', compact('comic', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(StoreComicRequest $request, Comic $comic)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255', 'min:2'],
            'thumb' => ['required'],
            'price' => ['required', 'min:0.99', 'numeric'],
            'series' => ['required', 'max:255', 'min:2'],
            'sale_date' => ['required', 'date', 'date_format:Y-m-d'],
            'description' => ['required']
        ]);
        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route('comics.index', $comic->id)->with('message', " Hai modificato con successo il fumetto!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('message', "Hai eliminato con successo il fumetto: {$comic->title}");
    }
}
