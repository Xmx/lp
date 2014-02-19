<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-13 06:28:51 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Cookie.php:67
2013-10-13 06:28:51 --- DEBUG: #0 /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 /home/elgooglt/domains/elgoog.lt/public_html/test/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Cookie.php:67