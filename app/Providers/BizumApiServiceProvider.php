<?php

namespace App\Providers;

use App\BizumApi\BizumApiBuilder;
use Blueprint\Builder;
use Illuminate\Support\ServiceProvider;

class BizumApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        Builder::mixin(new BizumApiBuilder);
    }
}
