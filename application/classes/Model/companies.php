<?php defined('SYSPATH') or die('No direct script access.');

class Model_Companies extends ORM {

	protected $_table_name = 'companies';

    public function get_companies($q)
    {
        $result = array();
        $new_q = explode(' ',$q);

        foreach ($new_q as $one_q) {
            $this->or_where('company','LIKE','%'.$one_q.'%');
        }
        

        $list = $this->find_all();

        foreach ($list as $item) {
            if(!empty($item->company)) array_push($result, $item->company);
        }

        return $result;
    }

    public function  toStringArray($email)
    {
        $companies = ORM::factory('users')->where('email','=',$email)->find();
        $result = array();

        if($companies->loaded())
        {
            $json = json_decode($companies->company);

            foreach ($json as $j) {
                $str = ORM::factory('companies',$j)->company;
                if(!empty($str)) array_push($result, $str);
            }
        }

        return $result;
    }

    public function get_name($id)
    {
        return $this->where('id','=',$id)->find()->company;
    }

}
