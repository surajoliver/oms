<?php

namespace App\Controllers;

use App\Models\ArtPiecesModel;

class Admin extends BaseController
{
    public function index(): string
    {
		#$model = model(ArtPiecesModel::class);

		$data = [
		#	'artpieces' => $model->getArtPieces(),
			'title' => 'Art Pieces'
		];

        return view('templates/adminheader')
			.view('admin/index', $data)
			.view('templates/adminfooter');
    }

}
