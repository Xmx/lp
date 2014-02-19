<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Manage extends Controller {

	public function action_index()
	{
		
		$main = View::factory('layout/web/index');
		$main->title = 'Valdymas';
		$main->css = HTML::style('theme/default.css');
		$main->grid = HTML::style('theme/fluid_grid.css');
		
		$content = View::factory('core/manage/manage');
		$content->inspections = ORM::factory('points')->order_by('date','DESC')->find_all();
		$main->js = HTML::script('theme/manage.js');
		$main->content = $content;
		if($this->request->post() && isset($_POST['clean'])) { DB::query(Database::DELETE, "TRUNCATE TABLE `ts_points`")->execute(); HTTP::redirect('/manage'); }
		
		$this->response->body($main);
	}
	
	public function action_refresh()
	{
		if(!$this->request->is_ajax()) HTTP::redirect( '/manage');
		$inspections = ORM::factory('points')->order_by('date','DESC')->find_all();
		$result = array();
		
		foreach ($inspections as $insp) {
		
        		$points = json_decode($insp->points);
        		$item = array('object'=>'','date'=>'','_1'=>'','_2'=>'','_3'=>'','_4'=>'','_5'=>'','status'=>'');
				
        		$item['object'] = $insp->object;
        		$item['date'] = $insp->date;
        		$item['_1'] = $points[0]->date.ORM::factory('points')->late($points[0]->late);
        		$item['_2'] = $points[1]->date.ORM::factory('points')->late($points[1]->late);
        		$item['_3'] = $points[2]->date.ORM::factory('points')->late($points[2]->late);
        		$item['_4'] = $points[3]->date.ORM::factory('points')->late($points[3]->late);
        		$item['_5'] = $points[4]->date.ORM::factory('points')->late($points[4]->late);
        		if(!$insp->status) $item['status'] =  '<td><p class="wait">Atliekama</p></td>';
        		else $item['status'] =  '<td><p class="success">Atlikta</p></td>';
        		array_push($result,$item);
        		}
		
		echo json_encode($result);
		
		
	}

}
