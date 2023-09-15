<?php

namespace App\Controllers;
// /Controllers/Products.php

use App\Models\ProductModel;
use CodeIgniter\Exception\PageNotFoundException;

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
			.view('products/index', $data)
			.view('templates/adminfooter');
	}

	public function delete($id)
	{
		echo 'Product delete';
	}
	public function edit($id)
	{
		helper('form');

		$model = model(ProductModel::class);
		$data = [
			'product' => $model->getProductById($id),
			'title' => 'Edit Product'
			];
		return view('templates/adminheader')
			.view('products/edit', $data)
			.view('templates/adminfooter');
	}

	// Saves in Edit Mode
	public function store()
	{
		helper('form');

		$post = $this->request->getPost();

		if(! $this->validate([
			'title' => 'required|max_length[30]|min_length[3]',
			'description' => 'required|max_length[200]|min_length[10]',
			'price' => 'required'
		])){
			// Validation fails
			$id = $post['id'];
			return $this->edit($id);
		}

		
		$post1 = $this->validator->getValidated();

		$model = model(ProductModel::class);

		$model->save([
			'id' => $post['id'],
			'title' => $post1['title'],
			'artist' => $post['artist'],
			'description' => $post1['description'],
			'image_url' => $post['imageurl'],
			'price' => $post1['price'],
		]);

		return view('templates/adminheader', ['title' => 'Create a Product Item'])
			.view('products/success')
			.view('templates/adminfooter');


	}

	public function new()
	{
		helper('form');

		return view('templates/adminheader', ['title' => 'Create Product'])
			.view('products/create')
			.view('templates/adminfooter');
	}

	// Saves in New Mode
	public function create()
	{
		helper('form');

		if(! $this->validate([
			'title' => 'required|max_length[30]|min_length[3]',
			'description' => 'required|max_length[200]|min_length[10]',
			'price' => 'required'
		])){
			// Validation fails
			return $this->new();
		}

		
		$post1 = $this->validator->getValidated();
		$post = $this->request->getPost();

		$model = model(ProductModel::class);

		$model->save([
			'title' => $post1['title'],
			'artist' => $post['artist'],
			'description' => $post1['description'],
			'image_url' => $post['imageurl'],
			'price' => $post1['price'],
		]);

		$message = ['message' => 'Record saved successfully!'];
		session()->setFlasdata($message);
		return redirect()->('products/index');
		#return view('templates/adminheader', ['title' => 'Create a Product Item'])
		#	.view('products/success')
		#	.view('templates/adminfooter');
	}
}

?>
