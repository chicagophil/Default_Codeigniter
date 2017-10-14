<?php

use App\Core\Public_Controller;

class Welcome extends Public_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}
}
