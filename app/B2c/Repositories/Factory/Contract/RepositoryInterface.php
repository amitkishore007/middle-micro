<?php 

namespace App\B2c\Repositories\Factory\Contract;

interface RepositoryInterface
{

	public function all();

	public function showOne($id);

	public function create(array $attributes);

	public function delete($id);

	public function update(array $attributes, $id);
}