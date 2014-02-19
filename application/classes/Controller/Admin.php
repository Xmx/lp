<?php defined('SYSPATH') or die('No direct script access.');
/*

     e      888~-_        e    e      888 888b    |   888~-_        e      888b    | 888~~  888    
    d8b     888   \      d8b  d8b     888 |Y88b   |   888   \      d8b     |Y88b   | 888___ 888    
   /Y88b    888    |    d888bdY88b    888 | Y88b  |   888    |    /Y88b    | Y88b  | 888    888    
  /  Y88b   888    |   / Y88Y Y888b   888 |  Y88b |   888   /    /  Y88b   |  Y88b | 888    888    
 /____Y88b  888   /   /   YY   Y888b  888 |   Y88b|   888_-~    /____Y88b  |   Y88b| 888    888    
/      Y88b 888_-~   /          Y888b 888 |    Y888   888      /      Y88b |    Y888 888___ 888____



/ )( \/ ___)(  __)(  _ \/ ___)
) \/ (\___ \ ) _)  )   /\___ \
\____/(____/(____)(__\_)(____/

*/

class Controller_Admin extends Controller {

	public function action_users()
	{
		session_start();
		if(!ORM::factory('users')->logged() || !ORM::factory('users')->admin()) HTTP::redirect('/user/login');
		$main = View::factory('layout/main');
		$main->js = HTML::script('theme/js/admin/users.js');

		$companies = ORM::factory('companies')->find_all();

		$content = View::factory('pages/admin/users/users');
		$content->companies = $companies;
	
		$content->users = ORM::factory('users')->find_all();
		$menu = View::factory('menus/user');
		$menu->cPage = 5;
		$content->menu = $menu;
		$main->content = $content;
		$main->title = 'Vartotojų administravimas';
		$this->response->body($main);

	}

	public function action_orders()
	{
		session_start();
		if(!ORM::factory('users')->logged() || !ORM::factory('users')->admin()) HTTP::redirect('/user/login');
		$main = View::factory('layout/main');
		$main->js = HTML::script('theme/js/admin/orders.js');

		$companies = ORM::factory('companies')->find_all();

		$content = View::factory('pages/admin/orders/orders');
		$menu = View::factory('menus/user');
		$menu->cPage = 3;
		$content->menu = $menu;

		$content->companies = $companies;

		$main->content = $content;
		$main->title = 'Užsakymų valdymas';
		$this->response->body($main);

	}
	
	public function action_git()
	{
	
	}

	public function action_assortment()
	{
		session_start();
		if(!ORM::factory('users')->logged() || !ORM::factory('users')->admin()) HTTP::redirect('/user/login');
		$main = View::factory('layout/main');
		$main->js = HTML::script('theme/js/admin/assortment.js');

		$companies = ORM::factory('companies')->find_all();

		$content = View::factory('pages/admin/assortment/assortment');
		$menu = View::factory('menus/user');
		$menu->cPage = 4;
		$content->menu = $menu;

		$content->companies = $companies;

		$main->content = $content;
		$main->title = 'Asortimentas';
		$this->response->body($main);

	}

	public function action_export()
	{
		session_start();
		if(!ORM::factory('users')->logged() || !ORM::factory('users')->admin()) HTTP::redirect('/user/login');
		$main = View::factory('layout/main');
		$main->js = HTML::script('theme/js/admin/invoices.js');

		$companies = ORM::factory('companies')->find_all();

		$content = View::factory('pages/admin/export/export');
		$menu = View::factory('menus/main');
		$menu->cPage = 3;
		$content->menu = $menu;

		$content->companies = $companies;
		$main->title = 'Sąskaitų eksportavimas';
		$main->content = $content;
		$this->response->body($main);

	}

	public function action_invoices()
	{
		session_start();
		if(!ORM::factory('users')->logged() || !ORM::factory('users')->admin()) HTTP::redirect('/user/login');
		$main = View::factory('layout/main');
		$main->js = HTML::script('theme/js/admin/invoices.js');

		$companies = ORM::factory('companies')->find_all();

		$content = View::factory('pages/admin/invoices/invoices');
		$menu = View::factory('menus/user');
		$menu->cPage = 5;
		$content->menu = $menu;

		$content->companies = $companies;
		$main->title = 'Sąskaitų valdymas';
		$main->content = $content;
		$this->response->body($main);

	}




}
