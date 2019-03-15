<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Mxj\Response\Helper\ResponseHelper;

class ResponseProvider extends ServiceProvider
{
    /**
     * Register the application's response macros.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('success', function ($return_data) {
            return ResponseHelper::success($return_data);
        });
        
	Response::macro('error', function ($code,$return_data) {
            return ResponseHelper::error($code,$return_data);
        });
    }
}
