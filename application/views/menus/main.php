			<div class="table header w100">
			<div class="row">
			<div class="table-cell menu-middle">
				<div class="navigation">
				<ul class="menu side-left">
					<li><a <?php if(isset($cPage) && $cPage== 0) echo 'class="current"';?> href="<?php echo url::base(); ?>admin/users">Vartotojų administravimas</a></li>
					<li><a <?php if(isset($cPage) && $cPage== 1) echo 'class="current"';?> href="<?php echo url::base(); ?>admin/orders">Užsakymų valdymas</a></li>
					<li><a <?php if(isset($cPage) && $cPage== 2) echo 'class="current"';?> href="<?php echo url::base(); ?>admin/assortment">Asortimentas</a></li>
				</ul>			
			</div>
			</div>
			<div class="table-cell logo-wrap">
				<img class="logo" src="/theme/img/header/logo.png" alt="logo">
			</div>
			<div class="table-cell  menu-middle">
				<div class="navigation">
				<ul class="menu  side-right">
					<li><a <?php if(isset($cPage) && $cPage== 3) echo 'class="current"';?> href="<?php echo url::base(); ?>admin/export">Sąskaitų eksportavimas</a></li>
					<li><a <?php if(isset($cPage) && $cPage== 4) echo 'class="current"';?> href="<?php echo url::base(); ?>admin/invoices">Sąskaitų valdymas</a></li>
					<li><a class="logout" href="<?php echo url::base(); ?>user/logout">Atsijungti</a></li>				
				</ul>			
			</div>
			</div>
			</div>
		</div>