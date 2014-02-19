			<div class="table header w100">
			<div class="row">
			<div class="table-cell menu-middle">
				<div class="navigation">
				<ul class="menu side-left">
					<li><a <?php if(isset($cPage) && $cPage== 0) echo 'class="current"';?> href="<?php echo url::base(); ?>user/orders">Teikti užsakymą</a></li>
					<li><a <?php if(isset($cPage) && $cPage== 1) echo 'class="current"';?> href="<?php echo url::base(); ?>user/status">Užsakymai</a></li>
					<?php if(ORM::factory('users')->admin()) { ?><li><a <?php if(isset($cPage) && $cPage== 2) echo 'class="current"';?> href="<?php echo url::base(); ?>user/invoices">Sąskaitos</a></li> <?php } ?>
				</ul>			
			</div>
			</div>
			<div class="table-cell logo-wrap">
				<img class="logo" src="/theme/img/header/logo.png" alt="logo">
			</div>
			<div class="table-cell  menu-middle">
				<div class="navigation">
				<ul class="menu  side-right">
				<?php if(!ORM::factory('users')->admin()) { ?><li><a <?php if(isset($cPage) && $cPage== 2) echo 'class="current"';?> href="<?php echo url::base(); ?>user/invoices">Sąskaitos</a></li> <?php } ?>
					<?php if(ORM::factory('users')->admin()) { ?><li><a <?php if(isset($cPage) && $cPage== 3) echo 'class="current"';?> href="<?php echo url::base(); ?>admin/orders">Užsakymų valdymas</a></li><?php } ?>
					<?php if(ORM::factory('users')->admin()) { ?><li><a <?php if(isset($cPage) && $cPage== 4) echo 'class="current"';?> href="<?php echo url::base(); ?>admin/assortment">Asortimentas</a></li><?php } ?>
					<?php if(ORM::factory('users')->admin()) { ?><li><a <?php if(isset($cPage) && $cPage== 5) echo 'class="current"';?> href="<?php echo url::base(); ?>admin/users">Vartotojai</a></li><?php } ?>
					<li><a <?php if(isset($cPage) && $cPage== 6) echo 'class="current"';?> class="logout" href="<?php echo url::base(); ?>user/logout">Atsijungti</a></li>
				</ul>			
			</div>
			</div>
			</div>
		</div>