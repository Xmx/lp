<?php defined('SYSPATH') or die('No direct script access.');

class Model_Orders extends ORM {

	protected $_table_name = 'orders';

	private function convert_state($n)
	{
		if($n) return 'Užsakyta';
		else return 'Pateikta';
	}

    public function get_orders($q)
    {
    	$orders = $this->where('imone','=',$q)->order_by('data','DESC')->find_all();
    	$result = array();

    	foreach ($orders as $order) {
    		$item = array(
    		'id'=>$order->id,
    		'data'=>$order->data,
    		'pavadinimas'=>$order->pavadinimas,
    		'kiekis'=>$order->n_kiekis,
            'kaina'=>$order->kaina,
            'asortimentas'=>$order->asortimentas,
            'saskaita'=>$order->saskaita,
    		'busena'=>$this->convert_state($order->busena),
            'aprasymas'=> ORM::factory('assortment',$order->asortimentas)->aprasymas
    			);
    		array_push($result,$item);
    	}

    	return $result;
    }

    public function get_by_card($id,$user_id)
    {
        $orders = $this->where('asortimentas','=',$id)->where('busena','=',0)->where('vartotojas','=',$user_id)->order_by('data','DESC')->find_all();
        $result = array();

        foreach ($orders as $order) {
            $item = array(
            'id'=>$order->id,
            'asortimentas'=>$order->asortimentas,
            'pavadinimas'=>$order->pavadinimas,
            'tipas'=>$order->tipas,
            'data'=>$order->data,
            'medziaga'=>$order->medziaga,
            'dydis'=>$order->x.'x'.$order->y,
            'spauda'=>$order->spauda,
            'folija'=>$order->folija,
            'lakas'=>$order->lakas,
            'klijai'=>$order->klijai,
            'atvezti'=>$order->atvezti,
            'i_sandeli'=>$order->i_sandeli,
            'komentaras'=>$order->komentaras,
                );
            array_push($result,$item);
        }

        return $result;
    }

    public function get_done($id,$user_id,$till,$from)
    {
        
        $this->where(DB::expr('date(data)'),'BETWEEN',array($from,$till))->where('vartotojas','=',$user_id)->where('busena','=',1);
        if($id != 0) $this->where('asortimentas','=',$id);
        $orders = $this->find_all();
        $result = array();

        foreach ($orders as $order) {
            $item = array(
            'asortimentas'=>$order->asortimentas,
            'pavadinimas'=>$order->pavadinimas,
            'tipas'=>$order->tipas,
            'medziaga'=>$order->medziaga,
            'dydis'=>$order->x.'x'.$order->y,
            'spauda'=>$order->spauda,
            'folija'=>$order->folija,
            'lakas'=>$order->lakas,
            'klijai'=>$order->klijai,
            'atvezti'=>$order->atvezti,
            'i_sandeli'=>$order->i_sandeli,
            'komentaras'=>$order->komentaras,
                );
            array_push($result,$item);
        }

        return $result;
    }

    public function get_orders_by_id($id,$from,$till,$q)
    {
        $result = array();

        $new_q = explode(' ',$q);

        foreach ($new_q as $one_q) {
            $this->or_where('pavadinimas','LIKE','%'.$one_q.'%');
        }


        $orders = $this->where('imone','=',$id)->where(DB::expr('date(data)'),'BETWEEN',array($from,$till))->order_by('data','DESC')->find_all();
        

        foreach ($orders as $order) {
            $item = array(
            'id'=>$order->id,
            'data'=>$order->data,
            'pavadinimas'=>$order->pavadinimas,
            'kiekis'=>$order->kiekis,
            'kaina'=>$order->kaina,
            'asortimentas'=>$order->asortimentas,
            'saskaita'=>$order->saskaita,
            'imone'=>$order->imone,
            'busena'=>$this->convert_state($order->busena),
            'aprasymas'=> ORM::factory('assortment',$order->asortimentas)->aprasymas
                );
            array_push($result,$item);
        }

        return $result;
    }

    public function get_status($var)
    {
        if($var == 0) return 'Neįvykdytas';
        else if($var == 1) return 'Dalinai įvykdytas';
        else return 'Įvykdytas';
    }

    public function get_status_css($var)
    {
        if($var == 0) return 'pending';
        else if($var == 1) return 'almost';
        else return 'done';
    }


}
