<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (env('APP_ENV') !== 'local') {
            // Periksa apakah APP_URL sudah memiliki 'https://', jika belum, tambahkan
            $appUrl = env('APP_URL');
            if (strpos($appUrl, 'http://') === 0) {
                $appUrl = 'https://' . substr($appUrl, 7);
            }

            // Memaksa root URL untuk menggunakan HTTPS
            URL::forceRootUrl($appUrl);
        }
    }
}
