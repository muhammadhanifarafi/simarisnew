<?php
		namespace App\Controllers;
		use App\Controllers\BaseController;
		class Risiko_unit extends BaseController
		{
			public function index()
			{
				$data = array_merge($this->data, [
					'title'         => 'Risiko_unit'
				]);
				return view('risiko_unit', $data);
			}
		}
		