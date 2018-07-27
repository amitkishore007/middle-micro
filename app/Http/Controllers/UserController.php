<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\B2c\Repositories\Contracts\UserInterface;

/**
 * 
 */
class UserController extends Controller
{
	protected $user;

	function __construct(UserInterface $user)
	{
		$this->user = $user;
	}

	public function show()
	{
		return response()->json($this->user->all(), Response::HTTP_OK);
	}
}