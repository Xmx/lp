<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-11 13:31:04 --- CRITICAL: View_Exception [ 0 ]: The requested view core/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\prototype\system\classes\Kohana\View.php:137
2013-10-11 13:31:04 --- DEBUG: #0 E:\prototype\system\classes\Kohana\View.php(137): Kohana_View->set_filename('core/index')
#1 E:\prototype\system\classes\Kohana\View.php(30): Kohana_View->__construct('core/index', NULL)
#2 E:\prototype\application\classes\Controller\Inspections.php(7): Kohana_View::factory('core/index')
#3 E:\prototype\system\classes\Kohana\Controller.php(84): Controller_Inspections->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\prototype\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Inspections))
#6 E:\prototype\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\prototype\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\prototype\index.php(118): Kohana_Request->execute()
#9 {main} in E:\prototype\system\classes\Kohana\View.php:137
2013-10-11 15:37:55 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\classes\Controller\Inspections.php [ 7 ] in E:\prototype\application\classes\Controller\Inspections.php:7
2013-10-11 15:37:55 --- DEBUG: #0 E:\prototype\application\classes\Controller\Inspections.php(7): Kohana_Core::error_handler(2, 'include(): File...', 'E:\prototype\ap...', 7, Array)
#1 E:\prototype\application\classes\Controller\Inspections.php(7): Controller_Inspections::action_index()
#2 E:\prototype\system\classes\Kohana\Controller.php(84): Controller_Inspections->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\prototype\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Inspections))
#5 E:\prototype\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\prototype\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 E:\prototype\index.php(118): Kohana_Request->execute()
#8 {main} in E:\prototype\application\classes\Controller\Inspections.php:7
2013-10-11 16:34:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '';' (T_ENCAPSED_AND_WHITESPACE) ~ APPPATH\classes\Controller\Inspections.php [ 12 ] in file:line
2013-10-11 16:34:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line