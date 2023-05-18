<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);

        $formComic = $request->all();

        $newComic = new Comic();

        $newComic->fill($formComic);



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
        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request);

        $formComic = $request->all();

        $comic->update($formComic);

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
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

        return redirect()->route('comics.index');
    }

    public function delete(Comic $comic)
    {
        return view('comics.delete', compact($comic));
    }

    private function validation($request)
    {
        $formData = $request->all();

        $validator = Validator::make($formData, [
            'title' => 'required|max:50|min:5',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|max:6',
            'series' => 'required|max:50',
            'sale_date' => 'required|max:10',
            'type' => 'required|max:50',
        ], [
            'title.required' => 'Il titolo è obligatorio',
            'title.max' => 'Il titolo non può essere più corto di 50 caratteri',
            'title.min' => 'Il titolo non può essere più corto di 5 caratteri',
            'description.required' => 'La descrizione è obligatoria',
            'thumb.required' => 'L immagine è obligatoria',
            'price.required' => 'Il prezzo è obligatorio',
            'price.max' => 'Il prezzo non deve essere più lungo di 6 caratteri',
            'series.required' => 'La serie è obligatoria',
            'series.max' => 'La serie non può essere più corta di 50 caratteri',
            'sale_date.required' => 'La data è obligatoria',
            'sale_date.max' => 'La data non può essere più corta di 10 caratteri',
            'type.required' => 'Il tipo è obligatorio',
            'type' => 'Il tipo non può essere più lungo di 50 caratteri',

        ])->validate();

        return $validator;
    }
}
