<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-18 14:32:26 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''' OR `company` LIKE '%%' GROUP BY `company`' at line 1 [ SELECT `users`.`id` AS `id`, `users`.`email` AS `email`, `users`.`password` AS `password`, `users`.`hash_pin` AS `hash_pin`, `users`.`company` AS `company`, `users`.`name` AS `name`, `users`.`surname` AS `surname`, `users`.`phone` AS `phone`, `users`.`admin` AS `admin`, `users`.`active` AS `active` FROM `users` AS `users` WHERE `company` NOT '' OR `company` LIKE '%%' GROUP BY `company` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-08-18 14:32:26 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', 'Model_Users', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Model\users.php(192): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\application\classes\Controller\Ajax.php(117): Model_Users->get_companies('')
#5 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_companies()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-08-18 14:32:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''' OR `company` LIKE '%%' GROUP BY `company`' at line 1 [ SELECT `users`.`id` AS `id`, `users`.`email` AS `email`, `users`.`password` AS `password`, `users`.`hash_pin` AS `hash_pin`, `users`.`company` AS `company`, `users`.`name` AS `name`, `users`.`surname` AS `surname`, `users`.`phone` AS `phone`, `users`.`admin` AS `admin`, `users`.`active` AS `active` FROM `users` AS `users` WHERE `company` NOT IN '' OR `company` LIKE '%%' GROUP BY `company` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-08-18 14:32:58 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', 'Model_Users', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Model\users.php(192): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\application\classes\Controller\Ajax.php(117): Model_Users->get_companies('')
#5 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_companies()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-08-18 14:33:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Users::not_where() ~ APPPATH\classes\Model\users.php [ 184 ] in :
2013-08-18 14:33:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-18 14:41:44 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''' OR `company` LIKE '%%' GROUP BY `company`' at line 1 [ SELECT `users`.`id` AS `id`, `users`.`email` AS `email`, `users`.`password` AS `password`, `users`.`hash_pin` AS `hash_pin`, `users`.`company` AS `company`, `users`.`name` AS `name`, `users`.`surname` AS `surname`, `users`.`phone` AS `phone`, `users`.`admin` AS `admin`, `users`.`active` AS `active` FROM `users` AS `users` WHERE `company` IS NOT '' OR `company` LIKE '%%' GROUP BY `company` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-08-18 14:41:44 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', 'Model_Users', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Model\users.php(192): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\application\classes\Controller\Ajax.php(117): Model_Users->get_companies('')
#5 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_companies()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-08-18 14:43:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\users.php [ 184 ] in :
2013-08-18 14:43:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :