<?php declare(strict_types=1);
namespace cyrixbiz\cookie;

use Illuminate\Support\ServiceProvider;

/**
 * Class CookieServiceProvider
 * @package cyrixbiz\cookie
 */
class CookieServiceProvider extends ServiceProvider {

    /**
     * @return void
     */
    public function boot()
    {

        /*
         * Publish Config
         */
        $this->publishes([
            __DIR__ . '/config/cookie.php' => config_path('cookie.php'),
        ]);

        /*
         * Publish the View-Files
         */
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/CookieView'),
        ]);

        /*
         * Publish the Languages-Files
         */
        $this->publishes([
            __DIR__ . '/resources/lang' => resource_path('lang/vendor/CookieLang'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        /*
        * Load the Views from the Package
        */
        $this->loadViewsFrom(__DIR__.'/resources/views/cookie', 'CookieView');

        /*
         * Load the Translation from the Package
         */
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'CookieLang');

    }

    /**
     * Register the cookie services.
     *
     * @return void
     */
    public function register()
    {
        // Load Config File
        $this->mergeConfigFrom(

            __DIR__ . '/config/cookie.php' , 'cookie'
        );
    }
}
?>