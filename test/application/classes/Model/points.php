<?php defined('SYSPATH') or die('No direct script access.');

class Model_Points extends ORM {

	protected $_table_name = 'points';

	function late($status)
	{
		if ($status) {
			return '<p class="error">(Veluoja)</p>';
		}
	}

	
}
