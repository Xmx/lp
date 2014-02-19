
		<?php if(isset($menu)) echo $menu; ?>
		<section>
		<div class="row">
      <div class="column grid_12 header-bg">
        <span class="header-title">Sąskaitų valdymas</span>
      </div>
    </div>
    <div class="row">
      <div class="column grid_12 triangle">
      </div>
    </div>
		<div class="spacer_20"></div>
		<div class="row">
			<div class="column grid_5">
				<?php echo Form::input('numeris','',array('id'=>'numeris','type'=>'number','class'=>'w100','placeholder'=>'Sąskaitos numeris')) ?> 
        

			</div>
      <div class="column grid_2">
      <?php echo Form::button('rasti','Paieška',array('id'=>'rasti')) ?> 
    </div>
		</div>
    <div class="row">
      <div class="column grid_3">
        <p>Nuo</p>
        <?php echo Form::input('from',$from,array('id'=>'from','class'=>'w100','type'=>'date')) ?> 
      </div>
      <div class="column grid_3">
        <p>Iki</p>
        <?php echo Form::input('till',$till,array('id'=>'till','class'=>'w100','type'=>'date')) ?> 
        <?php echo Form::hidden('user',$_SESSION['user'],array('id'=>'user')); ?>
      </div>
    </div>
        <div class="row">
			<div class="column grid_12">
					<div class="table-wrapper">
  					<div class="table-scroll" cellpadding="0" cellspacing="0" border="0" style='-moz-user-select: none;-webkit-user-select: none; cursor: pointer;' onselectstart='return false;'>
    				<table class="table-invoices">
                        <thead>
                        <tr style="text-align:left;">
                         <th><span class="text">N.R.</span></th>
                         <th><span class="text">Pavadinimas</span></th>
							           <th><span class="text">Data</span></th>
                         <th><span class="text">Sumokėti iki</span></th>
                         <th><span class="text">Kiekis</span></th>
                         <th><span class="text">Suma</span></th>
							           <th><span class="text">Kliento pav.</span></th>
                         <th><span class="text">Komentaras</span></th>
                        </tr>
                    </thead>
        		<tbody>
              <?php 
              if(isset($invoices)) {
                $nr = 1;
              foreach($invoices as $invoice) { ?>
              <tr value="<?php echo $invoice['id'];  ?>">
              <td><?php echo $nr; $nr++; ?></td>
              <td><?php echo 'Sąskaita Nr.'.$invoice['nr'];  ?></td>
              <td><?php echo $invoice['data'];  ?></td>
              <td><?php echo $invoice['pabaiga'];  ?></td>
              <td><?php echo $invoice['kiekis'];  ?></td>
              <td><?php echo $invoice['kaina'];  ?></td>
              <td><?php echo $invoice['klientas'];   ?></td>
              <td><?php echo $invoice['komentaras'];   ?></td>
              </tr>
              <?php }
              } ?>
        		</tbody>
    			</table>
  				</div>
				</div>

			
			</div>

        </div>

		<div class="spacer_40"></div>
		</section>
		<footer>
		</footer>
		<div class="slide-out"></div>