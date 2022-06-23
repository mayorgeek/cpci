<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\Facades\Auth;
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
        Filament::serving(function () {
            Filament::registerTheme(mix('css/filament.css'));
            Filament::registerNavigationGroups([
                'finances',
                'app logs',
            ]);
            Filament::registerUserMenuItems([
                'account' => UserMenuItem::make()->url(route('filament.resources.users.edit', ["record" => Auth::id() ?? 1])),
                // ...
            ]);
        });
    }
}
