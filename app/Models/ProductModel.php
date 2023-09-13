<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
	protected $table = 'art_pieces';

	public function getProducts()
	{
		return $this->findAll();
	}

	public function getProductById($id)
	{
		return $this->where(['id' => $id])->first();
	}
}
