<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ThemeController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->loggedIn();
	}

	public function index()
	{
		$dt = array(
			'grup'      => 'Hone', 'menu' => 'Home', 'sub' => 'View',
			'content'	=> 'home/home',
		);

		$this->theme($dt);
	}
}
