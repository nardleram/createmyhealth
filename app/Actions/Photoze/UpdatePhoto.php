<?php

namespace App\Actions\Photoze;

use App\Models\Photo;
use Illuminate\Http\Request;

class UpdatePhoto
{
    public function handle(Request $request): void
    {
        $photo = Photo::where('id', $request->id)->first();
        
        $photo->update([
            'photographer' => $request->photographer,
            'license' => $request->license
        ]);
    }
}