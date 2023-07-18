<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Actions\Photoze\StorePhoto;
use App\Http\Requests\PhotoRequest;
use App\Actions\Photoze\UpdatePhoto;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatePhotoRequest;

class PhotoController extends Controller
{
    public function __construct(
        protected StorePhoto $storePhoto,
        protected UpdatePhoto $updatePhoto
    ) {}

    public function index()
    {
        return Inertia::render('photoze/Index')->with([
            'photos' => Photo::all()
        ]);
    }

    public function create()
    {
        return Inertia::render('photoze/AddPhoto');
    }

    public function store(PhotoRequest $request)
    {   
        $this->storePhoto->handle($request);

        return to_route('photoze')->with([
            'success' => 'Photeau hydrated successfully'
        ]);
    }

    public function edit(Photo $photo)
    {
        return Inertia::render('photoze/EditPhoto')->with([
            'photo' => Photo::where('id', $photo->id)->first()
        ]);
    }

    public function update(UpdatePhotoRequest $request)
    {
        $this->updatePhoto->handle($request);
        
        return to_route('photoze')->with([
            'success' => 'Photoh updated successfully'
        ]);
    }

    public function destroy(Photo $photo)
    {
        Storage::delete('public/'.$photo->name);
        $photo->delete();

        return to_route('photoze')->with([
            'success' => 'Photø deleted successfulleh'
        ]);
    }
}
