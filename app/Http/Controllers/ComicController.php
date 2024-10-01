<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }


    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }


    public function create()
    {
        return view('comics.create');
    }


    public function destroy($id)
    {

        $comic = Comic::findOrFail($id);


        $comic->delete();


        return redirect()->route('comics.index')->with('success', 'Comic deleted successfully');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|numeric|min:0',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:255',
        ]);

        Comic::create($request->all());

        return redirect()->route('comics.index')->with('success', 'Fumetto creato con successo!');
    }
}
