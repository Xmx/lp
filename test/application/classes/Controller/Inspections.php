<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Inspections extends Controller {

	public function action_check()
	{
		$id = $this->request->param('id');
		$id2 = $this->request->param('id2');

		$object = ORM::factory('objects',$id);
		$point = ORM::factory('points')->where('object','=',$id)->order_by('date','DESC')->find();

		$main = View::factory('layout/mobile/index');
		$main->title = 'Apžiūra';
		$main->css = HTML::style('theme/mobile.css');
		
		$content = View::factory('core/inspection/confirm');
		
		
		if(!$object->loaded()) $content->error = 'Klaida! Tokio objekto nėra.';
		
		$start_date = date('Y-m-d H:i:s');
		if(!$point->loaded() && $object->loaded() || $point->loaded() && $point->status && $object->loaded() || $point->loaded() && !$point->status && $object->loaded() && strtotime($start_date) - strtotime($point->date) > (60*40))
		{
			
			$marks = json_decode($object->points);
			if(sizeof($marks) >= $id2 &&  $id2 >= 1)
			{
			$point =  ORM::factory('points');
			$point->object = $id;
			$point->points = json_encode($marks);
			$point->date = $start_date;
			$point->done = 0;
			$point->save();
			$content->point = 1;
			$content->data = $point->date;
			}
		}
		

		$marks = json_decode($point->points);
		if(sizeof($marks) >= $id2 &&  $id2 >= 1) 
		{
			
			if($marks[$id2-1]->check) $content->error = 'QR kodas jau buvo nuskenuotas.';
			else
			{
				$date = date('Y-m-d H:i:s');
				$marks[$id2-1]->date = $date;
				if(strtotime($date) - strtotime($marks[$id2-1]->date) > (10*60)) {
					$marks[$id2-1]->late = true;
					$content->late = 'Veluojama';
				}
				else $marks[$id2-1]->late = false;

				$marks[$id2-1]->check = true;
				
				
				$point->object = $id;
				$point->points = json_encode($marks);
				$point->done++;
				if($point->done == sizeof($marks)) $point->status = true;
				$point->save();
				$content->data = $date;
				
				if($point->done == sizeof($marks)) $content->done = 'Apžiūra atlikta';
			}
		}
		else if($id2 != 1) $content->error = 'Klaida! QR kodas neatpažintas.';

		$main->content = $content;
		
		$this->response->body($main);
	}

	public function action_qr()
	{
		
		$main = View::factory('layout/web/index');
		$main->title = 'QR kodai';
		$main->css = HTML::style('theme/default.css');
		$main->grid = HTML::style('theme/fluid_grid.css');
		
		$content = View::factory('core/inspection/qr');
		$main->content = $content;
		
		$this->response->body($main);
	}


}
