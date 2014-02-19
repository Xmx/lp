<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-02 19:27:18 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\assortment.php [ 155 ] in C:\xampp\htdocs\application\classes\Model\assortment.php:155
2013-11-02 19:27:18 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\assortment.php(155): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 155, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(344): Model_Assortment->search('', 'testas@testas.l...')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\assortment.php:155
2013-11-02 20:18:14 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'SOUNDEX(pavadinimas)' in 'where clause' [ SELECT `assortment`.`id` AS `id`, `assortment`.`tagai` AS `tagai`, `assortment`.`pavadinimas` AS `pavadinimas`, `assortment`.`medziaga` AS `medziaga`, `assortment`.`x` AS `x`, `assortment`.`y` AS `y`, `assortment`.`spauda` AS `spauda`, `assortment`.`folija` AS `folija`, `assortment`.`lakas` AS `lakas`, `assortment`.`perforacija` AS `perforacija`, `assortment`.`klijai` AS `klijai`, `assortment`.`atvezti` AS `atvezti`, `assortment`.`i_sandeli` AS `i_sandeli`, `assortment`.`suvyniojimas` AS `suvyniojimas`, `assortment`.`padetis_rulone` AS `padetis_rulone`, `assortment`.`Odd` AS `Odd`, `assortment`.`OD` AS `OD`, `assortment`.`h1` AS `h1`, `assortment`.`B1` AS `B1`, `assortment`.`kiekis` AS `kiekis`, `assortment`.`imone` AS `imone`, `assortment`.`data` AS `data`, `assortment`.`busena` AS `busena`, `assortment`.`aprasymas` AS `aprasymas`, `assortment`.`rulone` AS `rulone` FROM `assortment` AS `assortment` WHERE `imone` IN ('Imone', 'ACME', 'UAB \"Grimeda\"', 'Krekenava AB', 'Ventspils gala', 'Norfa', 'Latviškos', 'Naturale', 'CENTO', 'Bajorų') AND `SOUNDEX(pavadinimas)` LIKE '%SOUNDEX()%' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-11-02 20:18:14 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `assortm...', 'Model_Assortmen...', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Model\assortment.php(151): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\application\classes\Controller\Ajax.php(344): Model_Assortment->search('', 'testas@testas.l...')
#5 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251