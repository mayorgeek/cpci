<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\Facades\Auth;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\Facades\Schema;
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
	    if (config('app.env') === 'production') {
 		   \URL::forceScheme('https');
	    }

        Schema::defaultStringLength(191);

        Filament::serving(function () {
            Filament::registerTheme(mix('css/filament.css'));
            Filament::registerNavigationGroups([
                'finances',
                'app logs',
            ]);
            Filament::registerUserMenuItems([
                'account' => UserMenuItem::make()->url(route('filament.resources.users.view', ["record" => Auth::id() ?? 1])),
                // ...
            ]);
        });
    }
}
