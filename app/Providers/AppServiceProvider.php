<?php

namespace App\Providers;

use App\Models\SchoolYear;
use App\Models\Suffix;
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
        // view()->share([
        //     'suffixes' => Suffix::all(),
        //     'schoolYears' => SchoolYear::all()
        // ]);
    }
}