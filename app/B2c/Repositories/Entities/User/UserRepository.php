<?php 

namespace App\B2c\Repositories\Entities\User;

use App\User;
use App\B2c\Repositories\Contracts\UserInterface;

class UserRepository implements UserInterface
{
	protected $user;

	function __construct(User $user)
	{
		$this->user = $user;
	}
	
	public function all()
	{
		return $this->user->all();
	}

	public function showOne($id)
	{

	}

	public function create(array $attributes)
	{

	}

	public function delete($id)
	{

	}

	public function update(array $attributes, $id)
	{

	}
	
}