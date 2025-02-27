<?php
		namespace App\Controllers;
		use App\Controllers\BaseController;
		class Tentangsimaris extends BaseController
		{
			public function index()
			{
				$data = array_merge($this->data, [
					'title'         => 'Tentangsimaris'
				]);
				return view('tentangsimaris', $data);
			}
		}
		