<?php
		namespace App\Controllers;
		use App\Controllers\BaseController;
		class Homepelaporan extends BaseController
		{
			public function index()
			{
				$data = array_merge($this->data, [
					'title'         => 'Home/pelaporan'
				]);
				return view('homepelaporan', $data);
			}
		}
		