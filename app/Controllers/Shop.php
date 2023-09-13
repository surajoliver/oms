<?php

namespace App\Controllers;

use App\Models\ArtPiecesModel;

class Shop extends BaseController
{
    public function index(): string
    {
		$model = model(ArtPiecesModel::class);

		$data = [
			'artpieces' => $model->getArtPieces(),
			'title' => 'Art Pieces'
		];

        return view('templates/header')
			.view('shop/index', $data)
			.view('templates/footer');
    }
}
