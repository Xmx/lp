<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Export extends Controller {



	public function action_invoices()
	{
		$id = $this->request->param('id');
		$invoice = ORM::factory('invoices',$id);
		session_start();
		if(!$invoice->loaded() || ($invoice->vartotojas != $_SESSION['user'] && !ORM::factory('users')->admin()) || !ORM::factory('users')->logged()) HTTP::redirect('/user/login/');
		
		
		$company = ORM::factory('companies')->where('company','=',$invoice->imone)->find();
		$orders = ORM::factory('orders')->where('saskaita','=',$id)->find_all();

		$main = View::factory('export/invoices');
		$main->invoice = $invoice;
		$main->company = $company;
		$main->orders = $orders;
		
		$this->response->body($main);
		
	}
	
	public function action_orders()
	{
		$id = $this->request->param('id');
		$cache = ORM::factory('cache')->where('hash','=',$id)->find();
	
		
		session_start();
		if(($cache->user != $_SESSION['user'] && !ORM::factory('users')->admin()) || !$cache->loaded() || !ORM::factory('users')->logged()) HTTP::redirect('/user/login/');
		
		$orders_numbers = json_decode($cache->json,true);
		
		$orders = ORM::factory('orders')->where('id','IN',$orders_numbers)->order_by('data','DESC')->find_all();
		$orders_young = ORM::factory('orders')->where('id','IN',$orders_numbers)->order_by('data','ASC')->find_all();
		$main = View::factory('export/orders');
		
		$main->orders = $orders;
		$main->orders_young = $orders_young;
		
		$this->response->body($main);
		
	}

}
