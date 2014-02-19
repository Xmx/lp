<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=false;">
	<title><?php if(isset($title)) echo $title; ?></title>
	<?php if(isset($css)) echo $css; ?>
	<?php if(isset($grid)) echo $grid; ?>
</head>
<body>
	<div class="header"><div class="logo"></div></div>
	<?php if(isset($content)) echo $content; ?>
</body>
<script src="<?php echo url::base(); ?>theme/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo url::base(); ?>theme/jquery.dataTables.js"></script>
<?php if(isset($js)) echo $js; ?>
</html>