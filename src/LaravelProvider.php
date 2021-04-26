<?php

namespace JimChen\AliyunSts;

use Illuminate\Support\ServiceProvider;

class LaravelProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('aliyun.sts', function () {
            return new Client(
                config('aliyun.sts.key'),
                config('aliyun.sts.secret'),
                config('aliyun.sts.region_id'),
                config('aliyun.sts.name'),
                config('aliyun.sts.debug', false),
                config('aliyun.sts.connection_timeout', 20),
                config('aliyun.sts.timeout', 20),
                config('aliyun.sts.cert'),
                config('aliyun.sts.options')
            );
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                \dirname(__DIR__) . '/config/aliyun.php' => config_path('aliyun.php'),
            ], 'config');
        }
    }
}
