<?php

namespace App\Controllers;

use App\Models\ArtPiecesModel;

class Home extends BaseController
{
    public function index(): string
    {
		$model = model(ArtPiecesModel::class);

		$data = [
			'artpieces' => $model->getArtPieces(),
			'title' => 'Art Pieces'
		];

        return view('templates/header')
			.view('home/index', $data)
			.view('templates/footer');
    }
}
