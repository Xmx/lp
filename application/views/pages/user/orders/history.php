
		<?php if(isset($menu)) echo $menu; ?>
		<section>
		<div class="row">
      <div class="column grid_12 header-bg">
        <span class="header-title">Užsakymų istorija</span>
      </div>
    </div>
    <div class="row">
      <div class="column grid_12 triangle">
      </div>
    </div>

    <div class="row">
      <div class="column grid_3">
        <br/><br/>
        <select id="order" name="order" class="w100">
          <option id="0" value="">---Visi---</option>
          <?php foreach ($cards as $card) { ?>
          <option id="<?php echo $card->id; ?>" value="<?php echo $card->id; ?>"><?php echo $card->pavadinimas; ?></option>
          <?php } ?>
        </select>
      </div>
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
    				<table class="table-order">
                        <thead>
                        <tr style="text-align:left;">
                            <th><span class="text">N.R.</span></th>
							<th><span class="text">Maketo nr.</span></th>
                            <th><span class="text">Darbo pavadinimas</span></th>
                            <th><span class="text">Tipas</span></th>
                             <th><span class="text">Medžiaga</span></th>
							 <th><span class="text">Dydis</span></th>
							 <th><span class="text">Spauda</span></th>
                       		 <th><span class="text">Folija</span></th>
                       		 <th><span class="text">Lakas</span></th>
                       		 <th><span class="text">Klijai</span></th>
                       		 <th><span class="text">Užsakomas kiekis</span></th>
                        	<th><span class="text"></span></th>
                        	<th><span class="text">Komentaras</span></th>
                        </tr>
                    </thead>
                    <thead>
                        <tr style="text-align:left;">
                            <th><span class="text"></span></th>
							<th><span class="text"></span></th>
                            <th><span class="text"></span></th>
                            <th><span class="text"></span></th>
                             <th><span class="text"></span></th>
							 <th><span class="text"></span></th>
							 <th><span class="text"></span></th>
                       		 <th><span class="text"></span></th>
                       		 <th><span class="text"></span></th>
                       		 <th><span class="text"></span></th>
                       		 <th><span class="text">Atvežti</span></th>
                       		 <th><span class="text">Į sandėlį</span></th>
                       		 <th><span class="text"></span></th>
                        </tr>
                    </thead>
        		<tbody>
              <?php 
              if(isset($orders)) {
              foreach($orders as $order) { ?>
              <tr>
              <td><?php echo $order->id;  ?></td>
              <td><?php echo $order->asortimentas;  ?></td>
              <td><?php echo $order->pavadinimas; ?></td>
              <td><?php echo $order->tipas;  ?></td>
              <td><?php echo $order->medziaga;  ?></td>
              <td><?php echo $order->x.'x'.$order->y;  ?></td>
              <td><?php echo $order->spauda;  ?></td>
              <td><?php echo $order->folija;  ?></td>
              <td><?php echo $order->lakas;  ?></td>
              <td><?php echo $order->klijai;  ?></td>
              <td><?php echo $order->atvezti;  ?></td>
              <td><?php echo $order->i_sandeli;  ?></td>
              <td><?php echo $order->komentaras;  ?></td>
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