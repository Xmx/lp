<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		
		for($i = 1;$i <= 5;$i++)
		QRcode::png("http://192.168.1.103/test/inspections/check/1/".$i,$i.'.png', "L", 7, 7);
		HTTP::redirect( '/manage');
	}

}
