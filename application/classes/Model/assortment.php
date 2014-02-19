<?php defined('SYSPATH') or die('No direct script access.');

class Model_Assortment extends ORM {

	protected $_table_name = 'assortment';

    public function get_assortment($q)
    {
        $assortment = $this->where('imone','=',$q)->find_all();
        $result = array();

        foreach ($assortment as $one) {
            $item = array(
            'id'=>$one->id,
            'pavadinimas'=>$one->pavadinimas,
            'data'=>$one->data,
            'medziaga'=>$one->medziaga,
            'dydis'=>$one->x."x".$one->y,
            'klijai'=>$one->klijai,
            'tipas'=>$one->tagai,
                );
            array_push($result,$item);
        }

        return $result;
    }

    public function image($image, $id,$company)
    {
        if (!Upload::valid($image) OR 
            !Upload::type($image, array(
            'jpg',
            'jpeg',
            'png',
            'gif'
        ))) {
            return FALSE;
        }
        
        $directory = DOCROOT . 'cards/';
        
        if ($file = Upload::save($image, NULL, $directory)) {
            $name = $id;
            if (empty($name))
                $name = '0';
            $filename = $name . '.jpg';
            
            Image::factory($file)->save($directory . $filename);
            
    
            unlink($file);
           
           
            
            return $filename;
        }
        return false;
        
    }

    public function get_card($id)
    {
        $card = $this->where('id','=',$id)->find();

        if($card->loaded()) {

        $orders = ORM::factory('orders')->where('asortimentas','=',$id)->where('busena','=',1)->order_by('data','DESC')->limit(5)->find_all();
                     
        $i = 1;
        $history = '';

        foreach ($orders as $order) {
        $history .= '<p>'.$i.'. '.date('Y m d H:i:s',strtotime($order->data)).' - '.$order->kiekis.'vnt.</p>';
        $i++;
        }

        if(empty($history)) $history .= '<p>Nėra užsakymų</p>';

        $arrayToReturn = array(
            'id' => $card->id,
            'tagai' => $card->tagai,
            'pavadinimas' => $card->pavadinimas,
            'medziaga' => $card->medziaga,
            'x' => $card->x,
            'y' => $card->y,
            'spauda' => $card->spauda,
            'folija' => $card->folija,
            'lakas' => $card->lakas,
            'perforacija' => $card->perforacija,
            'klijai' => $card->klijai,
            'atvezti' => $card->atvezti,
            'i_sandeli' => $card->i_sandeli,
            'suvyniojimas' => $card->suvyniojimas,
            'padetis_rulone' => $card->padetis_rulone,
            'Odd' => $card->Odd,
            'OD' => $card->OD,
            'h1' => $card->h1,
            'B1' => $card->B1,
            'kiekis' => $card->kiekis,
            'imone' => $card->imone,
            'busena' => $card->busena,
            'aprasymas' => $card->aprasymas,
            'data' => $card->data,
             'rulone' => $card->rulone,
             'istorija' => $history
            );

        return json_encode($arrayToReturn);

        }
    }

    public function upload_image($image, $id)
    {
        if (!Upload::valid($image) OR 
            !Upload::type($image, array(
            'jpg',
            'jpeg',
            'png',
            'gif'
        ))) {
            return FALSE;
        }
        
        $directory = DOCROOT . 'cards/';
        
        if ($file = Upload::save($image, NULL, $directory)) {
            $name = $id;
            if (empty($name))
                $name = '0';
            $filename = $name . '.jpg';
            
            Image::factory($file)->save($directory . $filename);
            
    
            unlink($file);
           
           
            
            return $filename;
        }
        return false;
        
    }

    public function search($q,$email,$company = '')
    {
		$result = array();
        $this->where('imone','IN',ORM::factory('companies')->toStringArray($email));
		$input = explode (' ',$q);

        foreach ($input as $tag) {
            $this->where('pavadinimas','LIKE','%'.$tag.'%');
        }

        $list = $this->find_all();

        foreach ($list as $item) {
						$new = array(
						'id' => $item->id,
						'pavadinimas' => $item->pavadinimas,
						'tipas' => $item->tagai,
						'kaina' => $item->kiekis,
						'firma' => $item->imone,
						'dydis' => $item->x.'x'.$item->y,
						'medziaga' => $item->medziaga,
						'data'=>$item->data
						);

						array_push($result,$new);
			
		}

        return $result;
    }

    public function suggest($email)
    {
        $result = array();

        $list = $this->where('imone','IN',ORM::factory('companies')->toStringArray($email))->find_all();

        foreach ($list as $item) {
            
            array_push($result,$item->pavadinimas);
        }

        return $result;
    }

    public function search_admin($q,$imone)
    {
        $result = array();
        $new_q = explode(' ',$q);

        foreach ($new_q as $one_q) {
            $this->or_where('pavadinimas','LIKE','%'.$one_q.'%');
        }

        $list = $this->where('imone','=',$imone)->find_all();

        foreach ($list as $item) {
            $new = array(
                'id' => $item->id,
                'pavadinimas' => $item->pavadinimas,
                'tipas' => $item->tagai,
                'kaina' => $item->kiekis,
                'firma' => $item->imone,
                );

            array_push($result,$new);
        }

        return $result;
    }

}
