<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-02 12:37:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Ajax.php [ 467 ] in :
2013-10-02 12:37:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-02 19:47:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '"' ~ APPPATH\classes\Controller\Ajax.php [ 270 ] in :
2013-10-02 19:47:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-02 19:47:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '""' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Controller\Ajax.php [ 270 ] in :
2013-10-02 19:47:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-02 19:47:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '""' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Controller\Ajax.php [ 270 ] in :
2013-10-02 19:47:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-02 19:50:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Ajax.php [ 270 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:270
2013-10-02 19:50:25 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(270): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 270, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:270
2013-10-02 19:51:25 --- CRITICAL: ErrorException [ 2 ]: preg_match(): No ending delimiter '^' found ~ APPPATH\classes\Controller\Ajax.php [ 270 ] in :
2013-10-02 19:51:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): N...', 'C:\xampp\htdocs...', 270, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(270): preg_match('^\$?(([1-9](\d*...', '0.49')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-10-02 19:53:20 --- CRITICAL: ErrorException [ 2 ]: preg_match(): No ending delimiter '^' found ~ APPPATH\classes\Controller\Ajax.php [ 270 ] in :
2013-10-02 19:53:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): N...', 'C:\xampp\htdocs...', 270, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(270): preg_match('^\$?(([1-9](\d*...', '0.08')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-10-02 19:55:33 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Unknown modifier '&quot;' ~ APPPATH\classes\Controller\Ajax.php [ 270 ] in :
2013-10-02 19:55:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', 'C:\xampp\htdocs...', 270, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(270): preg_match('"^\$?(([1-9](\d...', '0.46')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-10-02 19:56:03 --- CRITICAL: ErrorException [ 2 ]: preg_match(): No ending delimiter '^' found ~ APPPATH\classes\Controller\Ajax.php [ 270 ] in :
2013-10-02 19:56:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): N...', 'C:\xampp\htdocs...', 270, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(270): preg_match('^\$?(([1-9](\d*...', '0.08')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-10-02 19:57:11 --- CRITICAL: ErrorException [ 2 ]: preg_match(): No ending delimiter '^' found ~ APPPATH\classes\Controller\Ajax.php [ 270 ] in :
2013-10-02 19:57:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): N...', 'C:\xampp\htdocs...', 270, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(270): preg_match('^\$?(([1-9](\d*...', '0.46')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in :