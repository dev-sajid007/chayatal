<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\WebInfo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.frontend.app', function ($view) {
            $info        = WebInfo::find(1);
            $view->with('info', $info);
        });

        View::composer('layouts.frontend.partials.header', function ($view) {
            $data        = Menu::with('childs')->whereNull('parent_id')->get(); 
            $view->with('menus', $data);
        });
    }
}
