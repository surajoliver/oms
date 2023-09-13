<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtPieceModel extends Model
{
	protected $table = 'art_pieces';

	public function getArtPieces($slug = false)
	{
		if($slug === false) {
			return $this->findAll();
		}

		return $this->where(['slug' => $slug])->first();
	}
}
