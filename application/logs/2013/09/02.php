<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-02 00:07:28 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `assortment` (`id`, `tagai`, `pavadinimas`, `medziaga`, `x`, `y`, `spauda`, `folija`, `lakas`, `perforacija`, `klijai`, `atvezti`, `i_sandeli`, `suvyniojimas`, `padetis_rulone`, `Odd`, `OD`, `h1`, `B1`, `kiekis`, `imone`, `busena`, `aprasymas`, `data`) VALUES ('1', '', 'poop', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UAB', 0, 'poop', '2013-09-02') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 00:07:28 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `as...', false, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\application\classes\Controller\Ajax.php(199): Kohana_ORM->save()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 00:07:55 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `assortment` (`id`, `tagai`, `pavadinimas`, `medziaga`, `x`, `y`, `spauda`, `folija`, `lakas`, `perforacija`, `klijai`, `atvezti`, `i_sandeli`, `suvyniojimas`, `padetis_rulone`, `Odd`, `OD`, `h1`, `B1`, `kiekis`, `imone`, `busena`, `aprasymas`, `data`) VALUES ('1', '', 'poop', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UAB', 0, '', '2013-09-02') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 00:07:55 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `as...', false, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\application\classes\Controller\Ajax.php(199): Kohana_ORM->save()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 00:11:00 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '4' for key 'PRIMARY' [ INSERT INTO `assortment` (`id`, `tagai`, `pavadinimas`, `medziaga`, `x`, `y`, `spauda`, `folija`, `lakas`, `perforacija`, `klijai`, `atvezti`, `i_sandeli`, `suvyniojimas`, `padetis_rulone`, `Odd`, `OD`, `h1`, `B1`, `kiekis`, `imone`, `busena`, `aprasymas`, `data`) VALUES ('4', '', 'ZXXZ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UAB', 0, 'ZXXZ', '2013-09-02') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 00:11:00 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `as...', false, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\application\classes\Controller\Ajax.php(199): Kohana_ORM->save()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 00:11:26 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5' for key 'PRIMARY' [ INSERT INTO `assortment` (`id`, `tagai`, `pavadinimas`, `medziaga`, `x`, `y`, `spauda`, `folija`, `lakas`, `perforacija`, `klijai`, `atvezti`, `i_sandeli`, `suvyniojimas`, `padetis_rulone`, `Odd`, `OD`, `h1`, `B1`, `kiekis`, `imone`, `busena`, `aprasymas`, `data`) VALUES ('5', '', 'ASSA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UAB', 0, 'ASSAAS', '2013-09-02') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 00:11:26 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `as...', false, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\application\classes\Controller\Ajax.php(199): Kohana_ORM->save()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 00:11:51 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `assortment` (`id`, `tagai`, `pavadinimas`, `medziaga`, `x`, `y`, `spauda`, `folija`, `lakas`, `perforacija`, `klijai`, `atvezti`, `i_sandeli`, `suvyniojimas`, `padetis_rulone`, `Odd`, `OD`, `h1`, `B1`, `kiekis`, `imone`, `busena`, `aprasymas`, `data`) VALUES ('1', 'tipas', 'zxxzzx', '', '0', '0', '5', '6', '45', '45', '', '6', '5', '', '0', '0', '0', '5', '0', '0', 'UAB', 0, 'asasasa', '2013-09-02') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 00:11:51 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `as...', false, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\application\classes\Controller\Ajax.php(199): Kohana_ORM->save()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 08:57:07 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '4' for key 'PRIMARY' [ INSERT INTO `assortment` (`id`, `tagai`, `pavadinimas`, `medziaga`, `x`, `y`, `spauda`, `folija`, `lakas`, `perforacija`, `klijai`, `atvezti`, `i_sandeli`, `suvyniojimas`, `padetis_rulone`, `Odd`, `OD`, `h1`, `B1`, `kiekis`, `imone`, `busena`, `aprasymas`, `data`) VALUES ('4', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UAB', 0, '1', '2013-09-02') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 08:57:07 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `as...', false, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\application\classes\Controller\Ajax.php(199): Kohana_ORM->save()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 09:11:20 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '5' for key 'PRIMARY' [ INSERT INTO `assortment` (`id`, `tagai`, `pavadinimas`, `medziaga`, `x`, `y`, `spauda`, `folija`, `lakas`, `perforacija`, `klijai`, `atvezti`, `i_sandeli`, `suvyniojimas`, `padetis_rulone`, `Odd`, `OD`, `h1`, `B1`, `kiekis`, `imone`, `busena`, `aprasymas`, `data`) VALUES ('5', '', 'hukhhuk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UAB', 0, 'ukyggk', '2013-09-02') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 09:11:20 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `as...', false, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\application\classes\Controller\Ajax.php(199): Kohana_ORM->save()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 09:12:07 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '4' for key 'PRIMARY' [ INSERT INTO `assortment` (`id`, `tagai`, `pavadinimas`, `medziaga`, `x`, `y`, `spauda`, `folija`, `lakas`, `perforacija`, `klijai`, `atvezti`, `i_sandeli`, `suvyniojimas`, `padetis_rulone`, `Odd`, `OD`, `h1`, `B1`, `kiekis`, `imone`, `busena`, `aprasymas`, `data`) VALUES ('4', '', 'hhoh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Įmonė', 0, 'hoohho', '2013-09-02') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-02 09:12:07 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `as...', false, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\application\classes\Controller\Ajax.php(199): Kohana_ORM->save()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251