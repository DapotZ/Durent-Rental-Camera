<?php

namespace App\Providers;

use Illuminate\Contracts\Pagination\Paginator as ContractsPaginationPaginator;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
        Paginator::useBootstrap();
    }
}
