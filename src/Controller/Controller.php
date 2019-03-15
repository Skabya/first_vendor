<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use App\Helpers\ResponseHelper;

class Controller extends BaseController
{
    protected function returnSuccess(array $return_data = [])
    {
    	return ResponseHelper::success($return_data);
    }

    protected function returnError(int $code, array $return_data = [])
    {
    	return ResponseHelper::error($code,$return_data);
    }

}
