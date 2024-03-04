<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;
class CostumerServiceProvider extends ServiceProvider
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
    public function boot()
    {
        Blade::directive('costumer',function (){
            return "<?php if(Session::has('costumer')): ?>";
        });
        Blade::directive('elsecostumer', function () {
            return "<?php else: ?>";
        });
        Blade::directive('endcostumer',function(){
            return "<?php endif; ?>";
        });
        //
    }
}
