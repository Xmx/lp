<?php defined('SYSPATH') or die('No direct script access.');

class Model_Invoices extends ORM {

	protected $_table_name = 'invoices';

	public function get_invoices($nr,$user,$from,$till)
	{
		$this->where(DB::expr('date(data)'),'BETWEEN',array($from,$till))->where('vartotojas','=',$user);

		if(!empty($nr)) $this->where('nr','=',$nr);

		$invoices = $this->find_all();

  		$invArray = array();

  		foreach ($invoices as $invoice) {
  			array_push($invArray,array('id'=>$invoice->id,'nr'=>$invoice->nr,'data'=>$invoice->data, 'kiekis'=>$invoice->kiekis,'kaina'=>$invoice->suma,'klientas'=>$invoice->vartotojas,'pabaiga'=>$invoice->pabaiga,'komentaras'=>$invoice->komentaras));
  		}

  		return $invArray;

	}

}
