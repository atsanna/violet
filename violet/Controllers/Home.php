<?php namespace Violet\Controllers;


class Home extends BaseController
{

	public function index()
	{
        echo view('welcome_message');
	}

	//--------------------------------------------------------------------


}
