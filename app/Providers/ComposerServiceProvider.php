<?php

namespace App\Providers;

use App\Models\Page;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        View::composer(['home.*', 'blog.*'], function($view) {
            $view->with('pages', Page::get()->toTree());
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
