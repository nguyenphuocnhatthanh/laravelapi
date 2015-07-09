<?php
namespace App\Domain;

abstract class AbstractRepository
{
	/**
	 * @return mixed : collection
	 */
	public function all()
	{
		return $this->model->all();
	}

	/**
	 * @param  int : $id
	 * @return bool 
	 */
	public function delete($id)
	{
		return $this->model->find($id)->delete();
	}

	/**
	 * @param  int : $id
	 * @return mixed | throw new Exception
	 */
	public function findById($id)
	{
		return $this->model->findOrFail($id);
	}

	public function getAllToJSON()
	{
		return $this->all()->toJSON();
	}

	public function paginateToJSON()
	{
		$paginate = $this->model->paginate(10);
		$paginate->setPath('/post');
		return $paginate->toJSON();
	}
}
