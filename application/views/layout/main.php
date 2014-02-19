<!doctype html>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php if(isset($title)) echo $title; ?></title>
	<meta name="viewport" content="width=device-width"/>
	<link rel="stylesheet" href="<?php echo url::base(); ?>theme/css/layout.css" />
	<link rel="stylesheet" href="<?php echo url::base(); ?>theme/css/jquery.toastmessage.css" />
	<link rel="stylesheet" href="<?php echo url::base(); ?>theme/css/1020_12_10_10.css" />
	<link type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" media="all" />
	<link type="text/css" href="<?php echo url::base(); ?>theme/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
</head>
	<body>
	

	<?php if(isset($content)) echo $content; ?>


	<script src="<?php echo url::base(); ?>theme/js/jquery.min.js"></script>
	<script src="<?php echo url::base(); ?>theme/js/jquery-ui.js"></script>
	<script src="<?php echo url::base(); ?>theme/js/respond.min.js"></script>
	<script src="<?php echo url::base(); ?>theme/js/jquery.form.js"></script> 
	<script src='<?php echo url::base(); ?>theme/js/jquery.base64.js'></script>
	
	<script type="text/javascript" src="<?php echo url::base(); ?>theme/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="<?php echo url::base(); ?>theme/js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="<?php echo url::base(); ?>theme/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo url::base(); ?>theme/js/jquery.toastmessage.js"></script>

	
	<script type="text/javascript">
	$(function()
	{
	$('.dataTables_scrollBody').jScrollPane();
	});
	</script>
	<?php if(isset($js)) echo $js; ?>
	</body>

</html>
