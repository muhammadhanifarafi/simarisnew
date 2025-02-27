<?php
		namespace App\Controllers;
		use App\Controllers\BaseController;
		class Homereferensi extends BaseController
		{
			public function index()
			{
				$data = array_merge($this->data, [
					'title'         => 'Home/referensi'
				]);
				return view('homereferensi', $data);
			}
		}
		