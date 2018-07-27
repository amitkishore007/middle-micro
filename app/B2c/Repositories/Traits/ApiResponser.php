<?php 

namespace App\B2c\Repositories\Traits;

use Illuminate\Http\Resources\Json\response;

/**
 * 
 */
trait Traits
{
		
	public function showMessage($data, $code = Response::HTTP_OK)
	{
		return response()->json($data, $code);
	}

}