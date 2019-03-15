<?php
namespace Mxj\Respones\Helper;


class ResponseHelper
{
	public static function success(array $return_data = [])
	{
		return static::response(
			\App\Constants\ResponseStuatusConstant::SUCCESS,
			\App\Constants\ResponseMsgConstant::$respose_msg[\App\Constants\ResponseStuatusConstant::SUCCESS],
			$return_data
		);
	}

	public static function error(int $code, array $return_data)
	{
		return static::response(
			$code,
			\App\Constants\ResponseMsgConstant::$respose_msg[$code],
			$return_data
		);
	}

	public static function response(int $code, string $message, array $return_data = [], array $error_data = [])
	{
		$factory = new Laravel\Lumen\Http\ResponseFactory;
		
		return $factory->json([
			'code' => $code, 
			'message' => $message,
			'error_data' => $error_data,
			'data' => $return_data,
		]);
	}
}
