<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Foundation\Vite;
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
            Filament::registerTheme(app(Vite::class)('resources/css/filament.css'),);
            Filament::registerNavigationGroups([
                'finances',
                'app logs',
            ]);
            Filament::registerUserMenuItems([
                'account' => UserMenuItem::make()->url(route('filament.resources.users.view', ["record" => Auth::id() ?? 1])),
                'logout' => UserMenuItem::make()->url(route('cpanel.auth.logout'))->label('Sign out'),
                // ...
            ]);
        });
    }
}
