<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-02 00:38:59 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be of the type array, string given, called in C:\xampp\htdocs\modules\orm\classes\Model\Auth\User.php on line 140 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 19 ] in C:\xampp\htdocs\system\classes\Kohana\Validation.php:19
2013-08-02 00:38:59 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\Validation.php(19): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Model\Auth\User.php(140): Kohana_Validation::factory('test')
#2 C:\xampp\htdocs\modules\orm\classes\Model\Auth\User.php(164): Model_Auth_User::get_password_validation('test')
#3 C:\xampp\htdocs\application\classes\Controller\Index.php(10): Model_Auth_User->create_user('test', 'test')
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\system\classes\Kohana\Validation.php:19
2013-08-02 00:39:41 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be of the type array, string given, called in C:\xampp\htdocs\modules\orm\classes\Model\Auth\User.php on line 140 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 19 ] in C:\xampp\htdocs\system\classes\Kohana\Validation.php:19
2013-08-02 00:39:41 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\Validation.php(19): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Model\Auth\User.php(140): Kohana_Validation::factory('test')
#2 C:\xampp\htdocs\modules\orm\classes\Model\Auth\User.php(164): Model_Auth_User::get_password_validation('test')
#3 C:\xampp\htdocs\application\classes\Controller\Index.php(10): Model_Auth_User->create_user('test', 'test')
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\system\classes\Kohana\Validation.php:19
2013-08-02 00:41:29 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be of the type array, string given, called in C:\xampp\htdocs\modules\orm\classes\Model\Auth\User.php on line 140 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 19 ] in C:\xampp\htdocs\system\classes\Kohana\Validation.php:19
2013-08-02 00:41:29 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\Validation.php(19): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Model\Auth\User.php(140): Kohana_Validation::factory('test')
#2 C:\xampp\htdocs\modules\orm\classes\Model\Auth\User.php(164): Model_Auth_User::get_password_validation('test')
#3 C:\xampp\htdocs\application\classes\Controller\Index.php(10): Model_Auth_User->create_user('test', 'test')
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\system\classes\Kohana\Validation.php:19
2013-08-02 00:43:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'create_user' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\Users.php [ 7 ] in :
2013-08-02 00:43:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 00:43:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'create_user' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\Users.php [ 7 ] in :
2013-08-02 00:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 00:45:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'cre' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\Users.php [ 7 ] in :
2013-08-02 00:45:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 00:45:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'cre' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\Users.php [ 7 ] in :
2013-08-02 00:45:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 00:45:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'cre' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\Users.php [ 7 ] in :
2013-08-02 00:45:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 00:45:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'cre' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\Users.php [ 7 ] in :
2013-08-02 00:45:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 00:45:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'cre' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\Users.php [ 7 ] in :
2013-08-02 00:45:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 00:45:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'cre' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\Users.php [ 7 ] in :
2013-08-02 00:45:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 00:45:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'cre' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\Users.php [ 7 ] in :
2013-08-02 00:45:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 00:45:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'cre' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\Users.php [ 7 ] in :
2013-08-02 00:45:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 01:09:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function login_user() on a non-object ~ APPPATH\classes\Controller\Index.php [ 11 ] in :
2013-08-02 01:09:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 01:09:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function login_user() on a non-object ~ APPPATH\classes\Controller\Index.php [ 11 ] in :
2013-08-02 01:09:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 01:09:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function login_user() on a non-object ~ APPPATH\classes\Controller\Index.php [ 11 ] in :
2013-08-02 01:09:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 01:09:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function login_user() on a non-object ~ APPPATH\classes\Controller\Index.php [ 11 ] in :
2013-08-02 01:09:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 01:12:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function login_user() on a non-object ~ APPPATH\classes\Controller\Index.php [ 11 ] in :
2013-08-02 01:12:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 01:12:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function login_user() on a non-object ~ APPPATH\classes\Controller\Index.php [ 11 ] in :
2013-08-02 01:12:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 01:16:13 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 01:16:13 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(23): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Index.php(11): Model_Users->login_user('test', 'test')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 01:17:11 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 01:17:11 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(23): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Index.php(11): Model_Users->login_user('test', 'test')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 01:17:12 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 01:17:12 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(23): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Index.php(11): Model_Users->login_user('test', 'test')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 01:17:59 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 01:17:59 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(23): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Index.php(11): Model_Users->login_user('test', 'test')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 01:18:00 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 01:18:00 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(23): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Index.php(11): Model_Users->login_user('test', 'test')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 01:18:01 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 01:18:01 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(23): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Index.php(11): Model_Users->login_user('test', 'test')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 01:18:01 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 01:18:01 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(23): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Index.php(11): Model_Users->login_user('test', 'test')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:23
2013-08-02 08:23:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Users::bcrypt() ~ APPPATH\classes\Model\Users.php [ 42 ] in :
2013-08-02 08:23:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 08:28:37 --- CRITICAL: Kohana_Exception [ 0 ]: The 6 property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 08:28:37 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('6')
#1 C:\xampp\htdocs\application\classes\Model\Users.php(42): Kohana_ORM->__get('6')
#2 C:\xampp\htdocs\application\classes\Controller\User.php(16): Model_Users->login_user('omg', 'omg')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 08:46:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Index.php [ 8 ] in :
2013-08-02 08:46:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 08:47:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Index.php [ 8 ] in :
2013-08-02 08:47:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 08:47:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Index.php [ 8 ] in :
2013-08-02 08:47:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 08:47:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Index.php [ 8 ] in :
2013-08-02 08:47:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 08:47:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Index.php [ 8 ] in :
2013-08-02 08:47:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 08:49:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\Model\Users.php [ 29 ] in C:\xampp\htdocs\application\classes\Model\Users.php:29
2013-08-02 08:49:24 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Index.php(8): Model_Users->logged()
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:29
2013-08-02 08:55:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Index.php [ 10 ] in :
2013-08-02 08:55:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 19:52:34 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Users::get_info(), called in C:\xampp\htdocs\application\classes\Controller\Ajax.php on line 16 and defined ~ APPPATH\classes\Model\Users.php [ 54 ] in C:\xampp\htdocs\application\classes\Model\Users.php:54
2013-08-02 19:52:34 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(54): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 54, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info()
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:54
2013-08-02 20:15:44 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:15:44 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(57): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('4')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:15:46 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:15:46 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(57): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('6')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:15:47 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:15:47 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(57): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('5')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:15:47 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:15:47 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(57): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('4')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:15:48 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:15:48 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(57): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('3')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:15:49 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:15:49 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(57): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('4')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:15:50 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:15:50 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(57): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('6')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:57
2013-08-02 20:58:19 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_HTML::script() must be of the type array, boolean given, called in C:\xampp\htdocs\application\classes\Controller\Admin.php on line 10 and defined ~ SYSPATH\classes\Kohana\HTML.php [ 240 ] in C:\xampp\htdocs\system\classes\Kohana\HTML.php:240
2013-08-02 20:58:19 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\HTML.php(240): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 240, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Admin.php(10): Kohana_HTML::script(Array, false)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin->action_users()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\system\classes\Kohana\HTML.php:240
2013-08-02 20:59:44 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_HTML::script() must be of the type array, boolean given, called in C:\xampp\htdocs\application\classes\Controller\Admin.php on line 10 and defined ~ SYSPATH\classes\Kohana\HTML.php [ 240 ] in C:\xampp\htdocs\system\classes\Kohana\HTML.php:240
2013-08-02 20:59:44 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\HTML.php(240): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 240, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Admin.php(10): Kohana_HTML::script(Array, false)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin->action_users()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\system\classes\Kohana\HTML.php:240
2013-08-02 20:59:45 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_HTML::script() must be of the type array, boolean given, called in C:\xampp\htdocs\application\classes\Controller\Admin.php on line 10 and defined ~ SYSPATH\classes\Kohana\HTML.php [ 240 ] in C:\xampp\htdocs\system\classes\Kohana\HTML.php:240
2013-08-02 20:59:45 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\HTML.php(240): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 240, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Admin.php(10): Kohana_HTML::script(Array, false)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin->action_users()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\system\classes\Kohana\HTML.php:240
2013-08-02 20:59:46 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_HTML::script() must be of the type array, boolean given, called in C:\xampp\htdocs\application\classes\Controller\Admin.php on line 10 and defined ~ SYSPATH\classes\Kohana\HTML.php [ 240 ] in C:\xampp\htdocs\system\classes\Kohana\HTML.php:240
2013-08-02 20:59:46 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\HTML.php(240): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 240, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Admin.php(10): Kohana_HTML::script(Array, false)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin->action_users()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\system\classes\Kohana\HTML.php:240
2013-08-02 20:59:46 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_HTML::script() must be of the type array, boolean given, called in C:\xampp\htdocs\application\classes\Controller\Admin.php on line 10 and defined ~ SYSPATH\classes\Kohana\HTML.php [ 240 ] in C:\xampp\htdocs\system\classes\Kohana\HTML.php:240
2013-08-02 20:59:46 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\HTML.php(240): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 240, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Admin.php(10): Kohana_HTML::script(Array, false)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin->action_users()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\system\classes\Kohana\HTML.php:240
2013-08-02 21:02:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTML::obfuscate() ~ APPPATH\classes\Controller\Admin.php [ 10 ] in :
2013-08-02 21:02:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-02 21:19:32 --- CRITICAL: Kohana_Exception [ 0 ]: The status property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 21:19:32 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('status')
#1 C:\xampp\htdocs\application\classes\Model\Users.php(68): Kohana_ORM->__get('status')
#2 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('5')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 21:19:32 --- CRITICAL: Kohana_Exception [ 0 ]: The status property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 21:19:32 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('status')
#1 C:\xampp\htdocs\application\classes\Model\Users.php(68): Kohana_ORM->__get('status')
#2 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('6')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 21:19:34 --- CRITICAL: Kohana_Exception [ 0 ]: The status property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 21:19:34 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('status')
#1 C:\xampp\htdocs\application\classes\Model\Users.php(68): Kohana_ORM->__get('status')
#2 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('4')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 21:19:34 --- CRITICAL: Kohana_Exception [ 0 ]: The status property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 21:19:34 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('status')
#1 C:\xampp\htdocs\application\classes\Model\Users.php(68): Kohana_ORM->__get('status')
#2 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('5')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 21:19:47 --- CRITICAL: Kohana_Exception [ 0 ]: The status property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 21:19:47 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('status')
#1 C:\xampp\htdocs\application\classes\Model\Users.php(68): Kohana_ORM->__get('status')
#2 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('4')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 21:19:48 --- CRITICAL: Kohana_Exception [ 0 ]: The status property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 21:19:48 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('status')
#1 C:\xampp\htdocs\application\classes\Model\Users.php(68): Kohana_ORM->__get('status')
#2 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('5')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 21:19:49 --- CRITICAL: Kohana_Exception [ 0 ]: The status property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 21:19:49 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('status')
#1 C:\xampp\htdocs\application\classes\Model\Users.php(68): Kohana_ORM->__get('status')
#2 C:\xampp\htdocs\application\classes\Controller\Ajax.php(16): Model_Users->get_info('6')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600