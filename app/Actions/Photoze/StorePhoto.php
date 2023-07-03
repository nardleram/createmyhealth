<?php

namespace App\Actions\Photoze;

use App\Models\Photo;
use Illuminate\Http\Request;

class StorePhoto
{   
    public function handle(Request $request): void
    {
        $photoPath = $request['photo']->store('images/landing', 'public');

        Photo::create([
            'photographer' => $request->photographer,
            'name' => $photoPath,
            'license' => $request->license
        ]);
    }
}