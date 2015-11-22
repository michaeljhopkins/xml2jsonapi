<?php

namespace Xjson\Providers;

use App;
use Illuminate\Support\ServiceProvider;
use Xjson\Xml\XmlInterface;
use Xjson\Xml\XmlTransformer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind(XmlInterface::class, XmlTransformer::class);
    }
}
