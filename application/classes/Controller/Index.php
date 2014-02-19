<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {

	public function action_index()
	{
		session_start();
		if(!ORM::factory('users')->logged()) HTTP::redirect('/user/login');
		else HTTP::redirect('/admin/users/');
	}

	public function action_debug()
	{
	$o = Email::send('tomas.stuina@gmail.com','tomas.stuina@gmail.com','tomas.stuina@gmail.com', 'tomas.stuina@gmail.com',false);
	}



}
