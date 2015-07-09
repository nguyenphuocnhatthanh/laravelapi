<?php
namespace App\Domain;

interface Repository
{
	public function all();
	public function findById($id);
	public function delete($id);
	public function getAllToJSON();
	public function paginateToJSON();
}
