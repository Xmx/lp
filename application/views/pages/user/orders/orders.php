
		<?php if(isset($menu)) echo $menu; ?>
		<section>
		<div class="row">
			<div class="column grid_12 header-bg">
				<span class="header-title">Užsakymo teikimas</span>
			</div>
		</div>
		<div class="row">
			<div class="column grid_12 triangle">
			</div>
		</div>
		<div class="row">
			<div class="column grid_12">
				<h1>1. Pasirinkite</h1>
			</div>
		</div>
		<div class="row">
			<div class="column grid_10">
				<?php echo Form::input('pavadinimas','',array('id'=>'pavadinimas','class'=>'w100','placeholder'=>'Pavadinimas')) ?> 
			</div>
			<div class="column grid_2">
				<?php 
				echo Form::submit('search','Paieška',array('id'=>'search', 'class'=>'float-right')); 
				echo Form::hidden('user',$_SESSION['user'],array('id'=>'user'));
				echo Form::hidden('add_card_to_order','',array('id'=>'add_card_to_order'));
				?>
			</div>
		</div>
        <div class="row">
			<div class="column grid_12">
				
				
				
               

    			<table class="table-assortment">
    				<thead>
                        <tr style="text-align:left;">
							<th><span class="text">ID</span></th>
							<th><span class="text">Kortelės data</span></th>
                            <th><span class="text">Pavadinimas</span></th>
                            <th><span class="text">Medžiaga</span></th>
                             <th><span class="text">Dydis</span></th>
							 <th><span class="text">Atvežti(tūkst.)</span></th>
							 <th><span class="text">Į sandėlį(tūkst.)</span></th>
							 <th></th>
                        </tr>
                    </thead>
                
        		<tbody>
        			<?php foreach ($assortment as $assort) { ?>
        			<tr id="assort_<?php echo $assort->id; ?>" price="<?php echo $assort->kiekis; ?>" value="<?php echo $assort->id; ?>">
        				<td><?php echo $assort->id; ?></td>
						<td><?php echo $assort->data; ?></td>
        				<td><?php echo $assort->pavadinimas; ?></td>
        				<td><?php echo $assort->medziaga; ?></td>
        				<td><?php echo $assort->x,'x',$assort->y; ?></td>
        				<td><?php echo Form::input('atvezti','',array('type'=>'number','id'=>"atvezti_".$assort->id)); ?></td>
        				<td><?php echo Form::input('i_sandeli','',array('type'=>'number','id'=>"i_sandeli_".$assort->id)); ?></td>
        				<td><?php echo Form::button('prideti','Pridėti',array('class'=>"prideti")); ?></td>
        			</tr>
        			<?php } ?>
        		</tbody>
        		
    			</table>
  			
  		
				

			
			</div>

        </div>
		<div class="row">
			<div class="column grid_12">
				<h1>2. Technologinės kortelės peržiūra</h1>
			</div>
		</div>
		<div class="row">
			<div class="column grid_3" style="overflow:visible;">
				<a class="card-href"><img class="card-photo card-img" src='<?php echo url::base(); ?>theme/img/admin/misc/not_available.JPG' onerror="card_image_error()"></a>
			</div>
			<div class="column grid_3" style="overflow:visible;">
				<img class="card-photo" src='<?php echo url::base(); ?>theme/img/export/0170897001380401986_pavyzdine forma uzsakymams 2013_html_m4a979abc.jpg'>
				<div class="numberCircle"></div>
			</div>
			<div class="column grid_6">
			<table class="table-info">
    				<thead>
                        
                    </thead>
                    <tbody>
                	<tr>
                		<td>
                		Pavadinimas
                		</td>
                		<td>
                		nėra
                		</td>
                	</tr>
                	<tr>
                		<td>
                		</td>
                		<td>
                		</td>
                	</tr>
        		
        		</tbody>
        	</table>
			</div>
		</div>
		<div class="row">
			<div class="column grid_12">
				<h1>3. Vykdyti užsakymą</h1>
			</div>
		</div>
        <div class="row">
			<div class="column grid_12">

    				<table class="table-order">
    				<thead>
                        <tr style="text-align:left;">
							<th><span class="text">ID</span></th>
							<th><span class="text">Kortelės data</span></th>
                            <th><span class="text">Pavadinimas</span></th>
                            <th><span class="text">Medžiaga</span></th>
                             <th><span class="text">Dydis</span></th>
							 <th><span class="text">Atvežti(tūkst.)</span></th>
							 <th><span class="text">Į sandėlį(tūkst.)</span></th>
							 <th><span class="text">Kaina viso</span></th>
   							<th></th>
                        </tr>
                    </thead>
        		<tbody>
        		</tbody>
    			</table>
  				
			
			</div>

        </div>
		<div class="spacer_20"></div>
		<div class="row">
			<div class="column grid_6">
				<?php echo Form::textarea('komentaras','',array('rows'=>'5','id'=>'komentaras','placeholder'=>'Komentaras')); ?>
			</div>
			<div class="column grid_6">
			</div>
		</div>
		<div class="spacer_20"></div>
		<div class="row">
			<div class="column grid_6" style="height:64px;">
			</div>
			<div class="column grid_6 order-top-line">
				<div class="float-right">
					<p><b>Viso:</b> <span id="sum_amount">0</span> vnt</p>
					<p>Viso: <span id="sum_price">0.00</span> Lt</p>
					<p>PVM: <span id="sum_pvm">0.00</span> Lt</p>
					<p>Viso su PVM: <span id="sum_pvm_price">0.00</span> Lt</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column grid_2 float-right">
				<?php echo Form::submit('give_order','Užsakyti',array('id'=>'give_order','class'=>'w100')); ?>
			</div>
		</div>
		<div class="spacer_40"></div>
		</section>
		<footer>
		</footer>
		<div class="slide-out"></div>