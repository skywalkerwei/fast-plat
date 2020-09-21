<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAppRoutes();              //App-Wx小程序 -  公众号 客户端
        $this->mapAdminsRoutes();           //后台接口
        $this->mapMerchantRoutes();         //商户端接口
        $this->mapNotifyRoutes();           //所有回调处理

    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }


    /**
     *
     * App-Wx小程序-公众号 客户端
     *
     * @return void
     */
    protected function mapAppRoutes()
    {
        Route::prefix('api')
            ->namespace($this->namespace.'\Api\App')
            ->group(base_path('routes/Api/app.php'));
    }


    /**
     *
     *   后台接口
     *
     * @return void
     */
    protected function mapAdminsRoutes()
    {
        Route::prefix('api/admins')
            ->namespace($this->namespace.'\Api\admins')
            ->group(base_path('routes/Api/admins.php'));
    }


    /**
     *
     *  商户类
     *
     * @return void
     */
    protected function mapMerchantRoutes()
    {
        Route::prefix('api/merchant')
            ->namespace($this->namespace.'\Api\Merchant')
            ->group(base_path('routes/Api/merchant.php'));
    }

    /**
     *
     *  回调-通知类处理
     *
     * @return void
     */
    protected function mapNotifyRoutes()
    {
        Route::prefix('api/notify')
            ->namespace($this->namespace.'\Api\Notify')
            ->group(base_path('routes/Api/notify.php'));
    }


}
