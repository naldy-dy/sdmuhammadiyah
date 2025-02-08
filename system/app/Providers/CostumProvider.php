<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Auth;
use App\Models\ProfilSekolah;

class CostumProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
      View::composer('*', function ($view) {
        $profil = ProfilSekolah::first();
        $view->with('profil', $profil);

    });
  }
}
