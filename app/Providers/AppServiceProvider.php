<?php

namespace App\Providers;

use Inertia\Inertia;
use App\Models\Photo;
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::shouldBeStrict(
            app()->isLocal()
        );
        View::share('photos', Photo::all());
        Inertia::setRootView('layouts.inertia-layout');
    }
}
