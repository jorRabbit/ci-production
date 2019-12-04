<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->loggedIn();
    }

    public function index()
    {
        $dt = array(
            'grup'      => 'Home', 'menu' => 'Home', 'sub' => 'View',
            'content'    => 'home/home',
        );

        $this->theme($dt);
    }

    public function content()
    {
        $dt = array(
            'grup'      => 'Home', 'menu' => 'Home', 'sub' => 'View',
            'content'    => 'home/content',
        );

        $this->theme($dt);
    }
}
