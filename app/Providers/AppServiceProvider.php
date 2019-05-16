<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
/* ↓ 追加 2019.05.15 ↓ */
use Illuminate\Support\Facades\Schema; //追加
/* ↑ 追加 2019.05.15 ↑ */

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* ↓ 追加 2019.05.15 ↓ */
        Schema::defaultStringLength(191); //追加
        /* ↑ 追加 2019.05.15 ↑ */
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
