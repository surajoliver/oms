<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Products extends BaseController
{
	public function index()
	{
		$model = model(ProductModel::class);
		$data = [
			'products' => $model->getProducts(),
			'title' => 'Products'
			];
		return view('templates/adminheader')
			.view('admin/productlist', $data)
			.view('templates/adminfooter');
	}

	public function delete($id)
	{
		echo 'Product delete';
	}
	public function edit($id)
	{
		$model = model(ProductModel::class);
		$data = [
			'product' => $model->getProductById($id),
			'title' => 'Edit Product'
			];
		return view('templates/adminheader')
			.view('admin/productedit', $data)
			.view('templates/adminfooter');
	}

	public function create()
	{
		echo 'Product create';
	}
}
