<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
	protected $table = 'art_pieces';

	protected $allowedFields = ['title','artist', 'description', 'image_url', 'price' ];
	
	public function getProducts()
	{
		return $this->findAll();
	}

	public function getProductById($id)
	{
		return $this->where(['id' => $id])->first();
	}


}
