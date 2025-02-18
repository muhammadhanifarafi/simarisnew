<?php
		namespace App\Controllers;
		use App\Controllers\BaseController;
		class Masterdatakamusrisiko extends BaseController
		{
			public function index()
			{
				$data = array_merge($this->data, [
					'title'         => 'Masterdata/kamusrisiko'
				]);
				return view('masterdatakamusrisiko', $data);
			}
		}
		