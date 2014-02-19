<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller {


	public function action_login()
	{
		session_start();
		if(ORM::factory('users')->logged()) HTTP::redirect('/user/orders/');

		$main = View::factory('pages/login/login');
		$main->title = 'Prisijungimas';

		if($this->request->post()) 
		{	
			$users = ORM::factory('users');

			
				if (empty($_POST['login_name']) || empty($_POST['login_pass'])) $main->error = 'Klaida! Nepalikite tuščių laukelių';
				else if(!$users->login_user($_POST['login_name'],$_POST['login_pass'])) $main->error = 'Klaida! Neteisingai įvestas vartotojo vardas arba slaptažodis.';
				else if(!$users->active($_POST['login_name'])) $main->error = 'Klaida! Vartotojas nėra aktyvus.';
				else
				{		
					$_SESSION['user'] = $_POST['login_name'];
					if(isset($_POST['admin'])) HTTP::redirect('/admin/users/');
					else HTTP::redirect('/user/orders/');

				}
			
		}



		$this->response->body($main);
	}

	public function action_logout()
	{
		session_start();
		session_destroy();
		HTTP::redirect('/user/login/');
	}

	public function action_orders()
	{
		session_start();
		if(!ORM::factory('users')->logged()) HTTP::redirect('/user/login/');
		
		$id = $this->request->param('id');

		$companies = ORM::factory('companies')->toStringArray($_SESSION['user']);
		if(sizeof($companies) > 0) $assortment = ORM::factory('assortment')->where('imone','IN',$companies)->find_all();
		else $assortment = array();
		
		
		$main = View::factory('layout/main');
		$main->js = HTML::script('theme/js/user/order.js');
		
		$content = View::factory('pages/user/orders/orders');

		if($id == 'success') $content = View::factory('pages/user/orders/success');


		$menu = View::factory('menus/user');
		$menu->cPage = 0;
		$content->menu = $menu;
		$content->assortment = $assortment;
		$main->title = 'Teikti užsakymą';
		$main->content = $content;
		
		$this->response->body($main);
		
	}

	public function action_status()
	{
		session_start();
		if(!ORM::factory('users')->logged()) HTTP::redirect('/user/login/');
		
		$companies = ORM::factory('companies')->toStringArray($_SESSION['user']);
		if(sizeof($companies) > 0) {
			$pending = ORM::factory('orders')->where('imone','IN',$companies)->where('busena','IN',array(0,1))->order_by('data','DESC')->find_all();
			$done = ORM::factory('orders')->where('imone','IN',$companies)->where('busena','=',2)->order_by('data','DESC')->find_all();

		}
		else {
			$pending = array();
			$done = array();
		}
		
		$main = View::factory('layout/main');
		$main->js = HTML::script('theme/js/user/status.js');
		
		$content = View::factory('pages/user/orders/status');
		$menu = View::factory('menus/user');
		$menu->cPage = 1;
		$content->menu = $menu;
		$content->orders_pending = $pending;
		$content->orders_done = $done;
		$main->title = 'Užsakymų būklė';
		$main->content = $content;
		
		$this->response->body($main);
		
	}


	public function action_assortment()
	{
		session_start();
		if(!ORM::factory('users')->logged()) HTTP::redirect('/user/login/');
		
		$companies = ORM::factory('companies')->toStringArray($_SESSION['user']);
		if(sizeof($companies) > 0) $assortment = ORM::factory('assortment')->where('imone','IN',$companies)->find_all();
		else $assortment = array();
		
		$main = View::factory('layout/main');
		$main->js = HTML::script('theme/js/user/cards.js');
		
		$content = View::factory('pages/user/cards/cards');
		$menu = View::factory('menus/user');
		$menu->cPage = 2;
		$content->menu = $menu;
		$content->assortment = $assortment;
		$main->title = 'Tech. kortelių parametrai';
		$main->content = $content;
		
		$this->response->body($main);
		
	}


	public function action_history()
	{
		session_start();
		if(!ORM::factory('users')->logged()) HTTP::redirect('/user/login/');
		
		$companies = ORM::factory('companies')->toStringArray($_SESSION['user']);
		if(sizeof($companies) > 0) $cards = ORM::factory('assortment')->where('imone','IN',$companies)->find_all();
		else $cards = array();
		
		
		$main = View::factory('layout/main');
		$main->js = HTML::script('theme/js/user/history.js');
		
		$content = View::factory('pages/user/orders/history');
		$menu = View::factory('menus/user');
		$menu->cPage = 3;
		$content->menu = $menu;
		$content->cards = $cards;
		$from = date('Y-m-d',time()-86400);
  		$till = date('Y-m-d',time());

  		$content->from = $from;
  		$content->till = $till;
  		$user_id = ORM::factory('users')->get_id($_SESSION['user']);

  		if(sizeof($companies) > 0) $orders = ORM::factory('orders')->where(DB::expr('date(data)'),'BETWEEN',array($from,$till))->where('vartotojas','=',$user_id)->where('imone','IN',$companies)->where('busena','=',1)->find_all();
		else $orders = array();
		$content->orders = $orders;
		$main->title = 'Užsakymų istorija';
		$main->content = $content;
		
		$this->response->body($main);
		
	}

	public function action_invoices()
	{
		session_start();
		if(!ORM::factory('users')->logged()) HTTP::redirect('/user/login/');
	
		$inv = ORM::factory('invoices')->find_all();
		
		$main = View::factory('layout/main');
		$main->js = HTML::script('theme/js/user/invoices.js');
		
		$content = View::factory('pages/user/invoices/invoices');
		$menu = View::factory('menus/user');
		$menu->cPage = 4;
		$content->menu = $menu;
		$content->inv = $inv;
		$from = date('Y-m-d',time()-86400);
  		$till = date('Y-m-d',time());

  		$content->from = $from;
  		$content->till = $till;
  		$user_id = $_SESSION['user'];

  		$invoices = ORM::factory('invoices')->where(DB::expr('date(data)'),'BETWEEN',array($from,$till))->where('vartotojas','=',$user_id)->find_all();

  		$invArray = array();

  		foreach ($invoices as $invoice) {
  			array_push($invArray,array('id'=>$invoice->id,'nr'=>$invoice->nr,'data'=>$invoice->data, 'kiekis'=>$invoice->kiekis,'kaina'=>$invoice->suma,'klientas'=>$invoice->vartotojas,'pabaiga'=>$invoice->pabaiga,'komentaras'=>$invoice->komentaras));
  		}

		$content->invoices = $invArray;
		$main->title = 'Sąskaitų valdymas';
		$main->content = $content;
		
		$this->response->body($main);
		
	}


}
