<div class="row">
	<div class="grid_12">
		
					
    				<table class="table-insp">
                        <thead>
                        <tr style="text-align:left;">
                            <th><span class="text">N.R.</span></th>
							<th><span class="text">Objekto ID</span></th>
                            <th><span class="text">Pradėta</span></th>
                            <th><span class="text">QR1</span></th>
                             <th><span class="text">QR2</span></th>
							 <th><span class="text">QR3</span></th>
							 <th><span class="text">QR4</span></th>
							 <th><span class="text">QR5</span></th>
							 <th><span class="text">Būsena</span></th>
                        </tr>
                    </thead>
        		<tbody>
        		<?php $i = 1; foreach ($inspections as $insp) {
        		$points = json_decode($insp->points);
        		echo '<tr>';
        		echo '<td>'.$i.'</td>';
        		echo '<td>'.$insp->object.'</td>';
        		echo '<td>'.$insp->date.'</td>';
        		echo '<td>'.$points[0]->date.ORM::factory('points')->late($points[0]->late).'</td>';
        		echo '<td>'.$points[1]->date.ORM::factory('points')->late($points[1]->late).'</td>';
        		echo '<td>'.$points[2]->date.ORM::factory('points')->late($points[2]->late).'</td>';
        		echo '<td>'.$points[3]->date.ORM::factory('points')->late($points[3]->late).'</td>';
        		echo '<td>'.$points[4]->date.ORM::factory('points')->late($points[4]->late).'</td>';
        		if(!$insp->status) echo '<td><p class="wait">Atliekama</p></td>';
        		else echo '<td><p class="success">Atlikta</p></td>';
        		echo '</tr>';
        		$i++; } ?>
        		</tbody>
        		
    			</table>
				
				<div class="loading">Atnaujinama</div>
  			
  				<?php echo HTML::anchor('/inspections/qr','Peržiūrėti QR kodus');  ?>
				<?php echo Form::open('',array('method'=>'post','style'=>'display:none;')); ?>
				<?php echo Form::button('clean','Išvalyti'); ?>
				<?php echo Form::close(); ?>
	</div>
</div>