<?php

?>
<div class="inspection">
	<?php 
	if(!isset($error)) { ?>

	<h2 class="success">QR kodas nuskaitytas</h2>
	<?php if(isset($point) && $point == 1) { ?><h3 class="success">Apžiūra pradėta</h3> <?php } ?>
	<h3>Data: <?php if(isset($data)) echo $data; ?></h3>
	<h3><?php if(isset($late)) echo $late; ?></h3>
	<h3><?php if(isset($done))  { echo $done; }else{ echo 'Galima eiti prie kito'; } ?></h3>

	<?php 
	}
	else {
		?><h2 class="error"><?php echo $error; ?></div>
	<?php }  ?>
</div>