<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php if(isset($title)) echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo URL::base(); ?>theme/css/login.css">
<script type="text/javascript">
</script>

</head>
<body>

<div class="login">
		<div class="head"></div>
		<div class="box">
		<?php
		if(isset($error)) { ?><label class="error"><?php echo $error; ?></label><?php }
		echo Form::open('',array('method'=>'post'));
		?>
		<div class="wrap">
		<?php
		echo Form::label('login_name', 'Vartotojo vardas:');
		?>
		<div class="spacer_10"></div>
		<span class="input-container">
		<?php
		echo Form::input('login_name');
		?>
		</span>
		<div class="spacer_10"></div>
		<div class="spacer_10"></div>
		<?php
		echo Form::label('login_pass', 'Slaptažodis:');
		?>
		<div class="spacer_10"></div>
		<span class="input-container">
		<?php
		echo Form::password('login_pass');
		?>
		</span>
		<span class="input-container">
		<?php
		echo Form::checkbox('admin','1');
		?>
		<span>Prisijungti į administraciją</span>
		</span>
		</div>
		<?php
		echo Form::submit('login','Prisijungti');
		echo Form::close();
		?>
		</div>
</div>

</body>
</html>