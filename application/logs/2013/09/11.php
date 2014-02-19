<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-11 23:55:17 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQL.php:358
2013-09-11 23:55:17 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Controller\Index.php(8): Kohana_ORM::factory('users')
#7 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQL.php:358
2013-09-11 23:55:18 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQL.php:358
2013-09-11 23:55:18 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Controller\Index.php(8): Kohana_ORM::factory('users')
#7 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQL.php:358