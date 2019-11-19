<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DemoController extends CI_Controller
{

	public function index()
	{
		$this->load->view('demo/index');
	}

	public function customdash()
	{
		$this->load->view('demo/custom-dashboard');
	}

	public function element()
	{
		$this->load->view('demo/element');
	}

	public function form()
	{
		$this->load->view('demo/form');
	}

	public function login()
	{
		$this->load->view('demo/login');
	}

	public function register()
	{
		$this->load->view('demo/register');
	}

	public function table()
	{
		$this->load->view('demo/table');
	}
}
