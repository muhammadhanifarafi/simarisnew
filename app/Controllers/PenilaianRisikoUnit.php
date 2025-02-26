<?php
		namespace App\Controllers;
		use App\Controllers\BaseController;
		class PenilaianRisikoUnit extends BaseController
		{
			public function index()
			{
				$data = array_merge($this->data, [
					'title'         => 'PenilaianRisikoUnit'
				]);
				return view('penilaianrisikounit', $data);
			}
		}
		