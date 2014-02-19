<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width">
	<title><?php if(isset($title)) echo $title; ?></title>
	<?php if(isset($css)) echo $css; ?>
</head>
<body>
	<div class="header"><div class="logo"></div></div>
	<?php if(isset($content)) echo $content; ?>
</body>
</html>