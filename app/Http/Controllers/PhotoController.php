<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {
        return view('photoze.index')->with([
            'photos' => Photo::all()
        ]);
    }

    public function create()
    {
        return view('photoze.add');
    }

    public function store(Request $request)
    {
        $photoPath = $request->file('name')->store('images/landing', 'public');

        Photo::create([
            'photographer' => $request->photographer,
            'name' => $photoPath,
            'license' => $request->license
        ]);

        return redirect()->route('photoze')->with('success', 'Photo added successfully!');
    }

    public function edit(Photo $photo)
    {
        return view('photoze.edit', compact('photo'));
    }

    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'photographer' =>  'required|string',
            'license' =>  'required|string',
        ]);

        $photo->update($request->all());

        return redirect()->route('photoze')->with('success', 'Photo details updated successfully!');
    }

    public function destroy(Photo $photo)
    {
        Storage::delete('public/'.$photo->name);
        $photo->delete();

        return redirect()->route('photoze')->with('success', 'Photo deleted successfully!');
    }
}
