<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {

	public function action_user()
	{
		session_start();

		if(!$this->request->is_ajax() || !ORM::factory('users')->logged()) HTTP::redirect('/');
		$id = $this->request->param('id');

		if($id == 'info')
		{
			if (isset($_REQUEST['user_id'])) 
			{
				print json_encode(ORM::factory('users')->get_info($_REQUEST['user_id']));
			}
		}
		if($id == 'search')
		{
			if(isset($_REQUEST['user_name']))
			{
				
				echo json_encode(ORM::factory('users')->search($_REQUEST['user_name']));
			}
		}
		else if($id =='manage')
		{
			
			if(isset($_REQUEST['email']) && isset($_REQUEST['pass']) && isset($_REQUEST['pass2']) && isset($_REQUEST['name']) && isset($_REQUEST['surname']) && isset($_REQUEST['phone']) && isset($_REQUEST['company']))
			{

				$status_active = false; $status_admin = false;

				if(isset($_REQUEST['status_active'])) $status_active = true;
				if(isset($_REQUEST['status_admin'])) $status_admin = true;

				$companies = '';
				if(isset($_REQUEST['companies'])) $companies = $_REQUEST['companies'];


				$user = array(
					'id' => '',
					'email' => $_REQUEST['email'],
					'password' => $_REQUEST['pass'],
					'password2' => $_REQUEST['pass2'],
					'name' => $_REQUEST['name'],
					'surname' => $_REQUEST['surname'],
					'phone' => $_REQUEST['phone'],
					'companies' => $companies,
					'status_active'=> $status_active,
					'status_admin'=> $status_admin
					);
				$errors = '';

				if(isset($_REQUEST['do']) && $_REQUEST['do'] == 'create')
				{
					

					$errors = ORM::factory('users')->validate($user);
					if(!array_filter($errors))
					{
						$user['id'] = ORM::factory('users')->create_user($user);
						
					}
					

				}
				else if(isset($_REQUEST['do']) && $_REQUEST['do'] == 'edit')
				{
					
					

					if(!empty($_REQUEST['pass']) || !empty($_REQUEST['pass2'])) $errors = ORM::factory('users')->validate($user,true,$_REQUEST['id']);
					else $errors = ORM::factory('users')->validate($user,false,$_REQUEST['id']);

					if(!array_filter($errors))
					{
						ORM::factory('users')->update_user($user,$_REQUEST['id']);
	
					}
				
				}

				$ok = false;
				if(!array_filter($errors)) $ok = true;

				$user['password'] = '';
				$user['password2'] = '';

				$data = array(
					'ok'=>$ok,
				 	'user'=>$user,
					'errors'=>$errors
					);

				echo json_encode($data);
			}
		}
		else if($id == 'suggest')
		{
			echo json_encode(ORM::factory('assortment')->suggest($_SESSION['user']));
		}

	}

	public function action_photo()
	{
		session_start();

		if(!ORM::factory('users')->logged()) HTTP::redirect('/');
		$id = $this->request->param('id');

		if($id == 'user')
		{
			$user = ORM::factory('users');
			$user->upload_users_image($_FILES['user_photo'],$_POST['user_photo_id']);
		}
		else if($id == 'card')
		{

		}
	


	}

	public function action_manage()
	{

		session_start();
		if(!$this->request->is_ajax() || !ORM::factory('users')->logged() || !ORM::factory('users')->admin()) HTTP::redirect('/user/login');
		$id = $this->request->param('id');

		if($id == 'amount')
		{

			if(isset($_REQUEST['kiekis']) && isset($_REQUEST['uzsakymas']) && is_numeric($_REQUEST['kiekis']) && $_REQUEST['kiekis'] > 0)
			{
					$order = ORM::factory('orders',$_REQUEST['uzsakymas']);

					if($order->loaded())
					{

						$kiekis = $order->kiekis;
						$n_kiekis = $order->n_kiekis;

						$order->kiekis = $kiekis + $_REQUEST['kiekis'];
						$order->n_kiekis = $n_kiekis - $_REQUEST['kiekis'];
						$order->kaina = $order->kiekis * $order->vnt;

						if($order->n_kiekis <= 0) $order->busena = 1;
						$order->save();

						echo json_encode($order->n_kiekis);

					}
			}
		}
		else if($id == 'assortment')
		{
			if(isset($_REQUEST['pavadinimas']) && isset($_REQUEST['imone']))
			{
				echo json_encode(ORM::factory('assortment')->search_admin($_REQUEST['pavadinimas'],$_REQUEST['imone']));
			}
		}

	}

	public function action_companies()
	{
		$id = $this->request->param('id');

		session_start();
		if(!$this->request->is_ajax() || !ORM::factory('users')->logged() || !ORM::factory('users')->admin()) HTTP::redirect('/user/login');

		if($id == 'list')
		{
			if(isset($_REQUEST['company_name']))
			{
				
				echo json_encode(ORM::factory('companies')->get_companies($_REQUEST['company_name']));
			}
		}
		else if($id == 'orders')
		{
			if(isset($_REQUEST['name']))
			{
				echo json_encode(ORM::factory('orders')->get_orders($_REQUEST['name']));
			}
		}

		else if($id == 'assortment')
		{
			if(isset($_REQUEST['name']))
			{
				echo json_encode(ORM::factory('assortment')->get_assortment($_REQUEST['name']));
			}
		}
		else if($id == 'new')
		{
			if(isset($_REQUEST['new_company_name']) && isset($_REQUEST['new_company_address']) && isset($_REQUEST['new_company_code']) && isset($_REQUEST['new_company_pvm']))
			{
				$data = array('id'=>'','company'=>'','msg'=>'');

				if(empty($_REQUEST['new_company_name']))
				{
					$data['msg'] = 'err_empt';
				}
				else if(ORM::factory('companies')->where('company','=',$_REQUEST['new_company_name'])->find()->loaded())
				{
					$data['msg'] = 'err_exist';
				}
				else
				{
					$companies = ORM::factory('companies');
					$companies->company = $_REQUEST['new_company_name'];
					$companies->adresas = $_REQUEST['new_company_address'];
					$companies->imones_kodas = $_REQUEST['new_company_code'];
					$companies->pvm_kodas = $_REQUEST['new_company_pvm'];
					$companies->save();

					$data['id'] = $companies->id;
					$data['company'] = $_REQUEST['new_company_name'];
					$data['msg'] = 'ok';
				}

				echo json_encode($data);

			}
		}
	}

	public function action_misc()
	{
		session_start();
		$id = $this->request->param('id');

		if(!$this->request->is_ajax() || !ORM::factory('users')->logged()) HTTP::redirect('/user/login');

		if($id == 'invoices')
		{
			if(isset($_REQUEST['nr']) && isset($_REQUEST['from']) && isset($_REQUEST['till'])) echo json_encode(ORM::factory('invoices')->get_invoices($_REQUEST['nr'],$_SESSION['user'],$_REQUEST['from'],$_REQUEST['till']));
		}
		else if($id == 'done_orders')
		{
			
			if(isset($_REQUEST['from']) && isset($_REQUEST['till']))
			{
				$user_id = $_SESSION['user'];
				
				$from = $_REQUEST['from'];
				$till = $_REQUEST['till'];

				echo json_encode(ORM::factory('orders')->get_done($_REQUEST['order'],$user_id,$till,$from));
			}
		}
	}

	public function action_assortment()
	{
		session_start();
		if(!$this->request->is_ajax() || !ORM::factory('users')->logged()) HTTP::redirect('/user/login');
		$id = $this->request->param('id');

		if($id == 'get')
		{
			if(isset($_REQUEST['id']))
			{
				echo ORM::factory('assortment')->get_card($_REQUEST['id']);
			}
		}
		else if($id == 'delete')
		{
			if(isset($_REQUEST['id']))
			{
				$card = ORM::factory('assortment',$_REQUEST['id']);
				if($card->loaded())
				{
					$card->delete();
				}	
			}
		}
		else if($id == 'dupe')
		{
			if(isset($_REQUEST['id']) && isset($_REQUEST['name']))
			{
				$card = ORM::factory('assortment',$_REQUEST['id']);
				if($card->loaded())
				{
					$new = ORM::factory('assortment');
					$card->pavadinimas = $_REQUEST['name'].' copy';
					$card->data = date('Y-m-d H:i:s');
					$new->values($card->as_array());
					$new->save();

					echo json_encode(array('id' => $new->id,'pavadinimas' => $new->pavadinimas,'data' => $new->data));
				}

			}
		}
		else if($id == 'update_dupe')
		{
			if(isset($_REQUEST['id']) && isset($_REQUEST['name']))
			{
				$card = ORM::factory('assortment',$_REQUEST['id']);
				if($card->loaded())
				{
					
					$card->pavadinimas = $_REQUEST['name'];
					
					$card->save();

					echo json_encode(array('id' => $card->id,'pavadinimas' => $card->pavadinimas,'data' => $card->data));
				}

			}
		}
		else if($id == 'manage')
		{

			//if(isset($_POST['id']) && isset())
			$card = '';

			$result = array('msg'=>'','id'=>'','name'=>'');

			if(empty($_POST['pavadinimas'])) $result['msg'] = 'err_name_empty';
			else if (!preg_match("/^\\$?(([1-9](\\d*|\\d{0,2}(,\\d{3})*))|0)(\\.\\d{1,2})?$/",$_POST['kiekis']) || $_POST['kiekis'] < 0) {
				$result['msg'] = 'err_price';
			}
			else
			{

			if($_POST['do'] == 'create') $card = ORM::factory('assortment');
            else $card = ORM::factory('assortment',$_POST['id']);


            if(isset($_POST['id']) && !empty($_POST['id']) && $_POST['do'] == 'edit') $card->id = $_POST['id'];
            
            $card->tagai = $_POST['tagai'];
            $card->pavadinimas = $_POST['pavadinimas'];
            $card->medziaga = $_POST['medziaga'];
            $card->x = $_POST['x'];
            $card->y = $_POST['y'];
            $card->spauda = $_POST['spauda'];
            $card->folija = $_POST['folija'];
            $card->lakas = $_POST['lakas'];
            $card->perforacija = $_POST['perforacija'];
            $card->klijai = $_POST['klijai'];
            $card->atvezti = $_POST['atvezti'];
            $card->i_sandeli = $_POST['i_sandeli'];
            $card->suvyniojimas = $_POST['suvyniojimas'];
            $card->padetis_rulone = $_POST['padetis_rulone'];
            $card->Odd = $_POST['Odd'];
            $card->OD = $_POST['OD'];
            $card->h1 = $_POST['h1'];
            $card->B1 = $_POST['B1'];
            $card->kiekis = $_POST['kiekis'];
            $card->imone = $_POST['company'];
            $card->rulone = $_POST['rulone'];

            if($_POST['do'] == 'create') $card->busena = 0;
            else  $card->busena = 1;

            $card->aprasymas = $_POST['aprasymas'];
            $card->data = date('Y-m-d H:i:s');

            if($_POST['do'] == 'create') $card->save();
            else $card->update();

            $result['id'] = $card->id;
            $result['name'] = $card->pavadinimas;
            $result['date'] = $card->data;

            if($_POST['do'] == 'create')  $result['msg'] = 'c_ok';
            else if($_POST['do'] == 'edit') $result['msg'] = 'e_ok';

            if(isset($_FILES['card_photo'])) ORM::factory('assortment')->upload_image($_FILES['card_photo'],$card->id);

        	}


        	echo json_encode($result);
           
		}
		else if($id == 'search')
		{
			if(isset($_REQUEST['pavadinimas']))
			{
				echo json_encode(ORM::factory('assortment')->search($_REQUEST['pavadinimas'],$_SESSION['user']));
			}
		}
		else if($id == 'info')
		{
			if(isset($_REQUEST['card_id']))
			{
				$assortment = ORM::factory('assortment',$_REQUEST['card_id']);

				$result = array();

				if($assortment->loaded()) $result = $assortment->as_array();

				echo json_encode($result);
			}
		}
		else if($id == 'order')
		{
		 if(isset($_REQUEST['orders'])) {

			$json = json_decode($_REQUEST['orders']);
			$data = date('Y-m-d H:i:s');

			$order = ORM::factory('order');
			$order->data = $data;
			$order->busena = 0;
			$order->save();

			$order_id = $order->id;

	

			$kiekis = 0; $suma = 0;
			$itemNR = false; 

			foreach ($json as $item) {
				$orders = ORM::factory('orders');
				$assort = ORM::factory('assortment',$item->id);

				$orders->order_nr = $order_id;
				$orders->pavadinimas = $assort->pavadinimas;
				$orders->tipas = $assort->tagai;
				$orders->medziaga = $assort->medziaga;
				$orders->x = $assort->x;
				$orders->y = $assort->y;
				$orders->spauda = $assort->spauda;
				$orders->folija = $assort->folija;
				$orders->lakas = $assort->lakas;
				$orders->klijai = $assort->klijai;
				$orders->atvezti = $assort->atvezti;
				$orders->i_sandeli = $assort->i_sandeli;
				$orders->suvyniojimas = $assort->suvyniojimas;
				$orders->padetis_rulone = $assort->padetis_rulone;
				$orders->Odd = $assort->Odd;
				$orders->OD = $assort->OD;
				$orders->h1 = $assort->h1;
				$orders->B1 = $assort->B1;
				$orders->vnt = $assort->kiekis;
				$orders->kiekis = 0;
				$orders->n_kiekis = $item->amount;
				$orders->imone = $assort->imone;
				$orders->rulone = $assort->rulone;
				$orders->data = $data;
				$orders->busena = 0;
				$orders->asortimentas = $item->id;
				if(isset($_REQUEST['comment'])) $orders->komentaras = $_REQUEST['comment'];
				$orders->kaina = $item->price;
				$orders->vartotojas = ORM::factory('users')->get_id($_REQUEST['user']);

				$suma += $item->price;
				$kiekis += $item->amount;

				if($item->amount > 0 && filter_var($item->amount, FILTER_VALIDATE_INT)) $orders->save();

			
			}

		

			$order->kaina = $suma;
			$order->kiekis = $kiekis;

			$order->update();

			echo json_encode(count($json));
			}
		
		}
		else if($id == 'unfinished_orders')
		{
			if(isset($_REQUEST['card']) && isset($_REQUEST['user']))
			{
				$user_id = ORM::factory('users')->get_id($_REQUEST['user']);
				echo json_encode(ORM::factory('orders')->get_by_card($_REQUEST['card'],$user_id));
			}
		}
		
	}


	public function action_invoices()
	{

		session_start();
		if(!$this->request->is_ajax() || !ORM::factory('users')->logged() || !ORM::factory('users')->admin()) HTTP::redirect('/user/login');
		$id = $this->request->param('id');

		if($id == 'orders')
		{

			if(isset($_REQUEST['company']) && isset($_REQUEST['from']) && isset($_REQUEST['till']) && isset($_REQUEST['order_name'])) echo json_encode(ORM::factory('orders')->get_orders_by_id($_REQUEST['company'],$_REQUEST['from'],$_REQUEST['till'],$_REQUEST['order_name']));
		}
		else if($id == 'create')
		{
			  if(isset($_REQUEST['invoice_nr']) && 
			  	!empty($_REQUEST['invoice_nr']) && 
			  	is_numeric($_REQUEST['invoice_nr']) && 
			  	$_REQUEST['invoice_nr'] > 0 && 
              isset($_REQUEST['invoice_sum']) && 
              isset($_REQUEST['invoice_date']) && 
              isset($_REQUEST['invoice_pay']) && 
              isset($_REQUEST['invoice_comment']) && 
              isset($_REQUEST['orders']) &&
              isset($_REQUEST['company']))
			  {
			  	$check = ORM::factory('invoices')->where('nr','=',$_REQUEST['invoice_nr'])->find();
			  	
			  	if(!$check->loaded())
			  	{
			  		$invoice = ORM::factory('invoices');
			  	
			  		$invoice->nr = $_REQUEST['invoice_nr'];
			  		$invoice->data = $_REQUEST['invoice_date'];
					$invoice->pabaiga = $_REQUEST['invoice_pay'];

			  		$invoice->suma_z = $_REQUEST['invoice_sum'];
			  		$invoice->vartotojas = $_SESSION['user'];
			  		$invoice->imone = $_REQUEST['company'];
			  		$invoice->komentaras = $_REQUEST['invoice_comment'];
			  		$invoice->save();

			  		$suma = 0.00; $kiekis = 0;

			  		foreach (json_decode($_REQUEST['orders']) as $order) {
			  			$find = ORM::factory('orders',$order->id);
			  			if($find->loaded())
			  			{
			  				$find->saskaita = $invoice->id;
			  				$suma += $find->kaina;
			  				$kiekis += $find->kiekis;

			  			$find->update();
			  			}
			  		}

			  		$invoice->suma = $suma;
			  		$invoice->kiekis = $kiekis;
			  	$invoice->update();

			  		echo json_encode("msg_ok");
			  	}
			  	else echo json_encode("msg_ex");

			  }
		}
		else if($id == "list")
		{
			if(isset($_REQUEST['from']) && 
              isset($_REQUEST['till']) && 
              isset($_REQUEST['company']))
			  {
			  	$invoices = ORM::factory('invoices')->where('imone','=',$_REQUEST['company'])->where(DB::expr('date(data)'),'BETWEEN',array($_REQUEST['from'],$_REQUEST['till']))->find_all();
			  	$result = array();

			  	foreach ($invoices as $invoice) {
			  		array_push($result,array('id'=>$invoice->id,'nr'=>$invoice->nr,'data'=>$invoice->data,'pabaiga'=>$invoice->pabaiga,'suma'=>$invoice->suma,'klientas'=>ORM::factory('users')->get_name($invoice->vartotojas),'imone'=>$invoice->imone,'komentaras'=>$invoice->komentaras));
			  	}

			  	echo json_encode($result);
			  }
		}
	}

		public function action_export()
		{
			$id = $this->request->param('id');

			session_start();
			if(!$this->request->is_ajax() || !ORM::factory('users')->logged()) HTTP::redirect('/user/login');

			if($id == 'cache')
			{
				if(isset($_REQUEST['order']))
				{
					$check = ORM::factory('cache')->where('json','=',$_REQUEST['order'])->find();

					if(!$check->loaded())
					{
						$order = ORM::factory('cache');
						$order->hash = base_convert(time(), 10, 36);
						$order->json = $_REQUEST['order'];
						$order->type = 0;
						$order->user = $_SESSION['user'];
						$order->save();

						echo json_encode($order->hash);
					}
					else echo json_encode($check->hash);
				}
			}

		}

		public function action_send()
		{
			session_start();
			$id = $this->request->param('id');

			if(!$this->request->is_ajax() || !ORM::factory('users')->logged() || !ORM::factory('users')->admin()) HTTP::redirect('/user/login');

			if($id == 'invoice')
			{
				if(isset($_REQUEST['invoice']) && isset($_REQUEST['content']))
				{
						$invoice = ORM::factory('invoices',$_REQUEST['invoice']);
						if($invoice->loaded())
						{
							$to      = $invoice->vartotojas;
						$subject = 'Sąskaita Nr.'.$_REQUEST['invoice'];
						$message = $_REQUEST['content'];
						$headers = "From: " . strip_tags('poligrafija@lp-poligrafija.lt') . "\r\n";
						$headers .= "Reply-To: ". strip_tags($invoice->vartotojas) . "\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

							mail($to, $subject, $message, $headers);
							echo json_encode('msg_ok');
						}
				}
			}
		}


}
