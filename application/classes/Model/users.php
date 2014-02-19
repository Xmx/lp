<?php defined('SYSPATH') or die('No direct script access.');

class Model_Users extends ORM {

	protected $_table_name = 'users';

	public function generate_salt()
	{
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789./';
		$length = 63;
		$salt = '';

		for($i = 0;$i < $length;$i++) $salt .= $chars[mt_rand(0,$length)];
	
		return $salt;
	}

	public function get_name($email)
	{
		$user = ORM::factory('users')->where('email','=',$email)->find();
		if($user->loaded()) return $user->name.' '.$user->surname;
	}

	public function bcrypt_salt($salt)
	{
		CRYPT_BLOWFISH or die ('No Blowfish found.');
		$Blowfish_Pre = '$2a$05$';
		$Blowfish_End = '$';

		return $Blowfish_Pre.$salt.$Blowfish_End;
	}

	public function logged()
	{
		if(isset($_SESSION['user'])) return true;
		else return false;
	}

	public function admin()
	{
		$admin = $this->where('email','=',$_SESSION['user'])->where('admin','=',1)->find();
		return $admin->loaded();
	}

	public function active($user)
	{
		$user = ORM::factory('users')->where('email','=',$user)->where('active','=',1)->find();
		return $user->loaded();
	}

	public function create_user($user)
	{
		$salt = $this->generate_salt();
		$salt = $this->bcrypt_salt($salt);

		$this->email = $user['email'];
		$this->hash_pin = $salt;
		$this->password = crypt($user['password'], $salt);
		$this->company = json_encode($user['companies']);
		$this->phone = $user['phone'];
		$this->name = $user['name'];
		$this->surname = $user['surname'];
		$this->admin = $user['status_admin'];
		$this->active = $user['status_active'];
		$this->save();

		return $this->id;

	}

	public function update_user($user,$id)
	{
		$this->where('id','=',$id)->find();

		if($this->loaded())
		{
			$salt = $this->generate_salt();
			$salt = $this->bcrypt_salt($salt);

			if(!empty($user['email'])) $this->email = $user['email'];
		
			if(!empty($user['password'])) 
			{
				$this->hash_pin = $salt;
				$this->password = crypt($user['password'], $salt);
			}
			$this->company = json_encode($user['companies']);
			$this->phone = $user['phone'];
			$this->name = $user['name'];
			$this->surname = $user['surname'];
			$this->admin = $user['status_admin'];
			$this->active = $user['status_active'];
			$this->update();
		}

	}

	public function login_user($name, $password)
	{
		$tmp = ORM::factory('users')->where('email','=',$name)->find();
		$salt = $tmp->hash_pin;
		$check = $this->where('email','=',$name)->where('password','=',crypt($password, $salt))->find();

		return $check->loaded();
	}

	public function get_info($id)
	{
		$data = array();
		$user = ORM::factory('users',$id);

		if($user->loaded())
		{
			$data[0] = $user->id;
			$data[1] = $user->email;
			$data[2] = json_decode($user->company);
			$data[3] = $user->name;
			$data[4] = $user->surname;
			$data[5] = $user->phone;
			$data[6] = $user->admin;
			$data[7] = $user->active;
		}

		return $data;
	}

	public function if_exists($email)
	{
		$user = ORM::factory('users')->where('email','=',$email)->find();
		return $user->loaded();
	}


	public function validate($user, $password = true, $id = '')
	{
		$errors = array(
			'email' =>'',
			'password' =>'',
			'name' =>'',
			'surname' =>'',
			);

			if(!empty($id)) $check = ORM::factory('users',$id);
		
			if(empty($user['email'])) $errors['email'] = 'Nepalikite tuščių laukelų.';
			else if(!filter_var($user['email'],FILTER_VALIDATE_EMAIL)) $errors['email'] =  'Neteisingas el-pašto formatas.';
			else if (($this->if_exists($user['email']) && empty($id)) || ($this->if_exists($user['email']) && $check->email != $user['email'])) $errors['email'] =  'Toks vartotojas jau yra sukurtas.';
		
		
		if($password)
		{
			if(empty($user['password']) || empty($user['password2'])) $errors['password'] = 'Nepalikite tuščių laukelų.';
			else if($user['password'] != $user['password2']) $errors['password'] =  'Slaptažodžiai nesutampa';
			else if(!preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $user['password'])) $errors['password'] =  'Slaptažodį turi sudaryti bent 8 simboliai, viena didžioji raidė ir bent vienas skaičius.';
		}
			if(!empty($user['name']) && !preg_match("/^[A-Z][a-zA-Z -]+$/", $user['name'])) $errors['name'] = 'Vardą gali sudaryti tik raidės, vardas prasideda didžiąją raide.';
			if(!empty($user['surname']) && !preg_match("/^[A-Z][a-zA-Z -]+$/", $user['surname'])) $errors['surname'] = 'Pavardę gali sudaryti tik raidės, pavardė prasideda didžiąją raide.';


		return $errors;
	}

	public function upload_users_image($image, $id)
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
        
        $directory = DOCROOT . 'users/';
        
        if ($file = Upload::save($image, NULL, $directory)) {
            $name = $id;
            if (empty($name))
                $name = '0';
            $filename = $name . '.jpg';
            
            Image::factory($file)->resize(500, 500, Image::AUTO)->save($directory . $filename);
            
    
            unlink($file);
           
           
            
            return $filename;
        }
        return false;
        
    }

    public function search($q)
    {
    	$result = array();
    	$new_q = explode(' ',$q);

		foreach ($new_q as $one_q) {
			$this->or_where('email','LIKE','%'.$one_q.'%');
		}
		

		$list = $this->find_all();

		foreach ($list as $item) {

			$toNewQ = array(
    		'id'=>$item->id,
    		'email'=>$item->email,
    		'active'=>$item->active
    			);

			 array_push($result, $toNewQ);
		}

		return $result;
    }

    public function get_id($email)
    {
    	$user = $this->where('email','=',$email)->find();

    	if($user->loaded()) return $user->id;

    }

}
