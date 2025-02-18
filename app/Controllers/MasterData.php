<?php
		namespace App\Controllers;
		use App\Controllers\BaseController;
		class MasterData extends BaseController
		{
			public function index()
			{
				$data = array_merge($this->data, [
					'title'         => 'Master Data'
				]);
				return view('masterdataList', $data);
			}
			public function form()
			{
				$data = array_merge($this->data, [
					'title'         => 'Master Data'
				]);
				return view('masterdataForm', $data);
			}
		}
		