<?php

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 时间处理类设置区域
        Carbon::setLocale('zh');
        // 设置分页风格
        Paginator::defaultView('pagination::modular');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ('production' != $this->app->environment()) {
            $this->app->register(IdeHelperServiceProvider::class);

            $this->app->register(\Way\Generators\GeneratorsServiceProvider::class);
            $this->app->register(\Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class);
        }
    }
}
