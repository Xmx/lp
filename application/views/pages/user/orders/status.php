
		<?php if(isset($menu)) echo $menu; ?>
		<section>
		<div class="row">
      <div class="column grid_12 header-bg">
        <span class="header-title">Užsakymų būklė</span>
      </div>
    </div>
    <div class="row">
      <div class="column grid_12 triangle">
      </div>
    </div>
		<div class="spacer_20"></div>
		<div class="row">
			<div class="column grid_5">
				<?php echo Form::input('pavadinimas','',array('id'=>'pavadinimas','class'=>'w100','placeholder'=>'Pavadinimas')) ?> 
			</div>
			<div class="column grid_2">
				<?php 
				echo Form::submit('search','Paieška',array('id'=>'search', 'class'=>'float-right')); 
				echo Form::hidden('user',$_SESSION['user'],array('id'=>'user'));
				?>
			</div>
		</div>

        <div class="row">
			<div class="column grid_12">
					
    				<table class="table-pending">
                        <thead>
                        <tr style="text-align:left;">
							<th><span class="text">ID</span></th>
                            <th><span class="text">Pavadinimas</span></th>
                            <th><span class="text">Užsakymo data</span></th>
                            <th><span class="text">Tipas</span></th>
                             <th><span class="text">Būsena</span></th>
                             <th><span class="text">Kaina vnt.</span></th>
							<th><span class="text">Iš viso</span></th>
                        </tr>
                    </thead>
        		<tbody>
        			<?php $i = 1; foreach ($orders_pending as $pending) { ?>
        			<tr>
        				
        				<td><?php echo $pending->id; ?></td>
        				<td><?php echo $pending->pavadinimas; ?></td>
        				<td><?php echo $pending->data; ?></td>
        				<td><?php echo $pending->medziaga; ?></td>
        				<td class="<?php echo ORM::factory('orders')->get_status_css($pending->busena); ?>"><?php echo ORM::factory('orders')->get_status($pending->busena); ?></td>
        				<td><?php echo $pending->vnt; ?></td>
        				<td><?php echo $pending->kaina; ?></td>
        			</tr>
        			<?php $i++; } ?>
        		</tbody>
        		
    			</table>
  				
				

			
			</div>

        </div>
        <div class="spacer_20"></div>
        <div class="row">
			<div class="column grid_12">
					
    				<table class="table-done">
                        <thead>
                        <tr style="text-align:left;">
							<th><span class="text">ID</span></th>
                            <th><span class="text">Pavadinimas</span></th>
                            <th><span class="text">Užsakymo data</span></th>
                            <th><span class="text">Tipas</span></th>
                             <th><span class="text">Būsena</span></th>
                             <th><span class="text">Kaina vnt.</span></th>
							<th><span class="text">Iš viso</span></th>
                        </tr>
                    </thead>
        		<tbody>
        			<?php $i = 1; foreach ($orders_done as $done) { ?>
        			<tr>
        				
        				<td><?php echo $done->id; ?></td>
        				<td><?php echo $done->pavadinimas; ?></td>
        				<td><?php echo $done->data; ?></td>
        				<td><?php echo $done->medziaga; ?></td>
        				<td class="<?php echo ORM::factory('orders')->get_status_css($done->busena); ?>"><?php echo ORM::factory('orders')->get_status($done->busena); ?></td>
        				<td><?php echo $done->vnt; ?></td>
        				<td><?php echo $done->kaina; ?></td>
        			</tr>
        			<?php $i++; } ?>
        		</tbody>
        		
    			</table>
  				
				

			
			</div>

        </div>
    <div class="row">
        <div class="column grid_3"><?php echo Form::button('export','Eksportuoti',array('id'=>'export','class'=>'w100')); ?></div>
    </div>
		<div class="spacer_40"></div>
		</section>
		<footer>
		</footer>
		<div class="slide-out"></div>