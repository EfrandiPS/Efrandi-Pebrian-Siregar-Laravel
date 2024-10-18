<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    public function index()
    {
        $casts = Cast::all();
        return view('casts.index', ['casts' => $casts]);
    }

    public function create()
    {
        return view('casts.create');
        return view('form');
    }

    public function store(Request $request)
    {
        $query = $request->input('search'); 

 
    $casts = Cast::when($query, function ($queryBuilder) use ($query) {
        return $queryBuilder->where('nama', 'like', '%' . $query . '%');
    })->get();
        $request->validate([
            'nama' => 'required|string|max:45',
            'umur' => 'required|integer',
            'bio' => 'nullable|string',
        ]);
    
  
        Cast::create($request->all());
    
    
        return redirect()->route('casts.index')->with('success', 'Actor berhasil ditambahkan.');
    }

    public function show($id)
    {

    $cast = Cast::findOrFail($id);

    return view('casts.show', compact('cast'));
    }

    public function edit($id)
    {

    $cast = Cast::findOrFail($id);


    return view('casts.edit', compact('cast'));
    }

    public function update(Request $request, $id)
    {
 
    $request->validate([
        'nama' => 'required|string|max:45',
        'umur' => 'required|integer',
        'bio' => 'nullable|string',
    ]);

    $cast = Cast::findOrFail($id);

   
    $cast->update($request->all());

    return redirect()->route('casts.index')->with('success', 'Data pemain film berhasil diperbarui.');
    }

    public function destroy($id)
    {
    $cast = Cast::findOrFail($id);
    $cast->delete();

    return redirect()->route('casts.index')->with('success', 'Cast berhasil dihapus.');
    }
}
