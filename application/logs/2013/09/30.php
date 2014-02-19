<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-30 01:47:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Email::body() ~ APPPATH\classes\Controller\Index.php [ 18 ] in :
2013-09-30 01:47:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 01:47:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Email::body() ~ APPPATH\classes\Controller\Index.php [ 18 ] in :
2013-09-30 01:47:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 01:53:58 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Email::send() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\Index.php [ 21 ] in C:\xampp\htdocs\application\classes\Controller\Index.php:21
2013-09-30 01:53:58 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Index.php(21): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_debug()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Index.php:21
2013-09-30 01:54:03 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Email::send() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\Index.php [ 21 ] in C:\xampp\htdocs\application\classes\Controller\Index.php:21
2013-09-30 01:54:03 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Index.php(21): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_debug()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Index.php:21
2013-09-30 01:54:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Email::body() ~ APPPATH\classes\Controller\Index.php [ 19 ] in :
2013-09-30 01:54:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 01:56:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Swift_Mailer' not found ~ APPPATH\classes\Controller\Index.php [ 14 ] in :
2013-09-30 01:56:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 01:56:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Swift_Mailer' not found ~ APPPATH\classes\Controller\Index.php [ 14 ] in :
2013-09-30 01:56:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 01:56:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Swift_Mailer' not found ~ APPPATH\classes\Controller\Index.php [ 14 ] in :
2013-09-30 01:56:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 01:57:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Emal' not found ~ APPPATH\classes\Controller\Index.php [ 14 ] in :
2013-09-30 01:57:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 01:57:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Emal' not found ~ APPPATH\classes\Controller\Index.php [ 14 ] in :
2013-09-30 01:57:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 01:57:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Email::newInstance() ~ APPPATH\classes\Controller\Index.php [ 14 ] in :
2013-09-30 01:57:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 13:58:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Index.php [ 22 ] in :
2013-09-30 13:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 13:58:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in C:\xampp\htdocs\modules\email\classes\Email.php:68
2013-09-30 13:58:35 --- DEBUG: #0 C:\xampp\htdocs\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 68, Array)
#1 C:\xampp\htdocs\modules\email\classes\Email.php(85): Email::instance('support')
#2 C:\xampp\htdocs\application\classes\Controller\Index.php(21): Email::send('support', 'First message', 'Hello, world!', Array, 'anotheruser@dom...')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_debug()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\email\classes\Email.php:68
2013-09-30 14:00:00 --- CRITICAL: ErrorException [ 2 ]: Missing argument 5 for Email::send(), called in C:\xampp\htdocs\application\classes\Controller\Index.php on line 21 and defined ~ MODPATH\email\classes\Email.php [ 83 ] in C:\xampp\htdocs\modules\email\classes\Email.php:83
2013-09-30 14:00:00 --- DEBUG: #0 C:\xampp\htdocs\modules\email\classes\Email.php(83): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 83, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Index.php(21): Email::send('First message', 'Hello, world!', Array, 'anotheruser@dom...')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_debug()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\modules\email\classes\Email.php:83
2013-09-30 17:02:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Swift_MailTransport' not found ~ APPPATH\classes\Controller\Index.php [ 14 ] in :
2013-09-30 17:02:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 17:06:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function create_my_image_data() ~ APPPATH\classes\Controller\Index.php [ 14 ] in :
2013-09-30 17:06:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 17:06:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function create_my_image_data() ~ APPPATH\classes\Controller\Index.php [ 14 ] in :
2013-09-30 17:06:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 17:07:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Swift_Message' not found ~ APPPATH\classes\Controller\Index.php [ 17 ] in :
2013-09-30 17:07:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 17:09:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Email::connect() ~ APPPATH\classes\Controller\Index.php [ 15 ] in :
2013-09-30 17:09:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 17:17:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Email::connect() ~ APPPATH\classes\Controller\Index.php [ 15 ] in :
2013-09-30 17:17:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 17:17:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Email::connect() ~ APPPATH\classes\Controller\Index.php [ 15 ] in :
2013-09-30 17:17:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 17:24:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Email::connect() ~ APPPATH\classes\Controller\Index.php [ 15 ] in :
2013-09-30 17:24:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 17:24:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Email::connect() ~ APPPATH\classes\Controller\Index.php [ 15 ] in :
2013-09-30 17:24:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 17:25:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Index.php [ 21 ] in :
2013-09-30 17:25:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-30 17:26:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in C:\xampp\htdocs\modules\email\classes\Email.php:68
2013-09-30 17:26:01 --- DEBUG: #0 C:\xampp\htdocs\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 68, Array)
#1 C:\xampp\htdocs\modules\email\classes\Email.php(85): Email::instance('support')
#2 C:\xampp\htdocs\application\classes\Controller\Index.php(21): Email::send('support', 'First message', 'Hello, world!', Array, 'anotheruser@dom...')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_debug()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\email\classes\Email.php:68
2013-09-30 17:28:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in C:\xampp\htdocs\modules\email\classes\Email.php:68
2013-09-30 17:28:29 --- DEBUG: #0 C:\xampp\htdocs\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 68, Array)
#1 C:\xampp\htdocs\modules\email\classes\Email.php(85): Email::instance('support')
#2 C:\xampp\htdocs\application\classes\Controller\Index.php(21): Email::send('support', 'First message', 'Hello, world!', Array, 'anotheruser@dom...')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_debug()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\email\classes\Email.php:68
2013-09-30 17:28:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in C:\xampp\htdocs\modules\email\classes\Email.php:68
2013-09-30 17:28:31 --- DEBUG: #0 C:\xampp\htdocs\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 68, Array)
#1 C:\xampp\htdocs\modules\email\classes\Email.php(85): Email::instance('support')
#2 C:\xampp\htdocs\application\classes\Controller\Index.php(21): Email::send('support', 'First message', 'Hello, world!', Array, 'anotheruser@dom...')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_debug()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\email\classes\Email.php:68
2013-09-30 17:29:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in C:\xampp\htdocs\modules\email\classes\Email.php:68
2013-09-30 17:29:37 --- DEBUG: #0 C:\xampp\htdocs\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 68, Array)
#1 C:\xampp\htdocs\modules\email\classes\Email.php(85): Email::instance('support')
#2 C:\xampp\htdocs\application\classes\Controller\Index.php(21): Email::send('support', 'First message', 'Hello, world!', Array, 'tomas.stuina@gm...')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_debug()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\email\classes\Email.php:68
2013-09-30 17:33:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ MODPATH\email\classes\Email.php [ 68 ] in C:\xampp\htdocs\modules\email\classes\Email.php:68
2013-09-30 17:33:22 --- DEBUG: #0 C:\xampp\htdocs\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 68, Array)
#1 C:\xampp\htdocs\modules\email\classes\Email.php(85): Email::instance('')
#2 C:\xampp\htdocs\application\classes\Controller\Index.php(21): Email::send('', 'First message', 'Hello, world!', Array, 'tomas.stuina@gm...')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_debug()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\email\classes\Email.php:68
2013-09-30 17:37:23 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in C:\xampp\htdocs\modules\email\init.php:4
2013-09-30 17:37:23 --- DEBUG: #0 C:\xampp\htdocs\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\modules\email\init.php(4): include()
#2 C:\xampp\htdocs\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\application\bootstrap.php(124): Kohana_Core::modules(Array)
#4 C:\xampp\htdocs\index.php(102): require('C:\xampp\htdocs...')
#5 {main} in C:\xampp\htdocs\modules\email\init.php:4
2013-09-30 17:37:59 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in C:\xampp\htdocs\modules\email\init.php:4
2013-09-30 17:37:59 --- DEBUG: #0 C:\xampp\htdocs\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include(): File...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\modules\email\init.php(4): include()
#2 C:\xampp\htdocs\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\application\bootstrap.php(124): Kohana_Core::modules(Array)
#4 C:\xampp\htdocs\index.php(102): require('C:\xampp\htdocs...')
#5 {main} in C:\xampp\htdocs\modules\email\init.php:4
2013-09-30 21:28:21 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `assortment`.`id` AS `id`, `assortment`.`tagai` AS `tagai`, `assortment`.`pavadinimas` AS `pavadinimas`, `assortment`.`medziaga` AS `medziaga`, `assortment`.`x` AS `x`, `assortment`.`y` AS `y`, `assortment`.`spauda` AS `spauda`, `assortment`.`folija` AS `folija`, `assortment`.`lakas` AS `lakas`, `assortment`.`perforacija` AS `perforacija`, `assortment`.`klijai` AS `klijai`, `assortment`.`atvezti` AS `atvezti`, `assortment`.`i_sandeli` AS `i_sandeli`, `assortment`.`suvyniojimas` AS `suvyniojimas`, `assortment`.`padetis_rulone` AS `padetis_rulone`, `assortment`.`Odd` AS `Odd`, `assortment`.`OD` AS `OD`, `assortment`.`h1` AS `h1`, `assortment`.`B1` AS `B1`, `assortment`.`kiekis` AS `kiekis`, `assortment`.`imone` AS `imone`, `assortment`.`data` AS `data`, `assortment`.`busena` AS `busena`, `assortment`.`aprasymas` AS `aprasymas`, `assortment`.`rulone` AS `rulone` FROM `assortment` AS `assortment` WHERE `imone` IN () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-30 21:28:21 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `assortm...', 'Model_Assortmen...', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Controller\User.php(51): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_orders()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-30 23:29:31 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `assortment`.`id` AS `id`, `assortment`.`tagai` AS `tagai`, `assortment`.`pavadinimas` AS `pavadinimas`, `assortment`.`medziaga` AS `medziaga`, `assortment`.`x` AS `x`, `assortment`.`y` AS `y`, `assortment`.`spauda` AS `spauda`, `assortment`.`folija` AS `folija`, `assortment`.`lakas` AS `lakas`, `assortment`.`perforacija` AS `perforacija`, `assortment`.`klijai` AS `klijai`, `assortment`.`atvezti` AS `atvezti`, `assortment`.`i_sandeli` AS `i_sandeli`, `assortment`.`suvyniojimas` AS `suvyniojimas`, `assortment`.`padetis_rulone` AS `padetis_rulone`, `assortment`.`Odd` AS `Odd`, `assortment`.`OD` AS `OD`, `assortment`.`h1` AS `h1`, `assortment`.`B1` AS `B1`, `assortment`.`kiekis` AS `kiekis`, `assortment`.`imone` AS `imone`, `assortment`.`data` AS `data`, `assortment`.`busena` AS `busena`, `assortment`.`aprasymas` AS `aprasymas`, `assortment`.`rulone` AS `rulone` FROM `assortment` AS `assortment` WHERE `imone` IN () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-30 23:29:31 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `assortm...', 'Model_Assortmen...', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Controller\User.php(51): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_orders()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251