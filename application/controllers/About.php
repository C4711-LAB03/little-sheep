<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{

	/**
	 * About Page for this controller.
	 */
	public function index()
	{
		$this->load->view('about');
	}

}
