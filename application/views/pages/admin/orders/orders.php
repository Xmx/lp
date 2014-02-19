
		<?php if(isset($menu)) echo $menu; ?>
		<section>
         <div class="row">
            <div class="column grid_12 header-bg">
                <span class="header-title">Užsakymų valdymas</span>
            </div>
        </div>
        <div class="row">
            <div class="column grid_12 triangle">
            </div>
        </div>
        <div class="row">
			<div class="column grid_3">
                <div class="table w100">
                    <div class="table-row">
                    <div class="table-cell spacer-input" style="vertical-align: top;">
                    <?php echo Form::input('company_name','',array('placeholder'=>'Įveskite pavadinimą','class'=>'w100','id'=>'company_name'));   ?>
                    </div>
                    </div>
                    <div class="table-row">
                    <div class="table-cell spacer-input">
                    
                    <?php echo Form::button('search_name','Rasti',array('id'=>"search_name","class"=>"w100")); ?>
                  
                    </div>
                    </div>
                </div>
					<div class="table-wrapper">
  					<div class="table-scroll" cellpadding="0" cellspacing="0" border="0" style='-moz-user-select: none;-webkit-user-select: none; cursor: pointer;' onselectstart='return false;'>
    				<table class="table-companies">
                    <thead>
                        <tr>
                            <th><span class="text">Įmonė</span></th>
                            <th><span class="text"></span></th>
                            <th><span class="text"></span></th>
                        </tr>
                    </thead>
        		<tbody>
                    <?php
                        if(isset($companies))
                        {
                            foreach ($companies as $company) {
                               ?><tr value="<?php echo $company->company; ?>"> <td><?php echo $company->company; ?> </td><td></td><td></td></tr> <?php
                            }
                        }
                    ?>
        		</tbody>
    			</table>
  				</div>
				</div>
			</div>
			<div class="column grid_5">
					<div class="table-wrapper">
  					<div class="table-scroll" cellpadding="0" cellspacing="0" border="0" style='-moz-user-select: none;-webkit-user-select: none; cursor: pointer;' onselectstart='return false;'>
    				<table class="table-orders">
                        <thead>
                        <tr>
                            <th><span class="text">Data</span></th>
                            <th><span class="text">Pavadinimas</span></th>
                            <th><span class="text">Kiekis</span></th>
                             <th><span class="text">Būsena</span></th>
                        </tr>
                    </thead>
        		<tbody>
        		</tbody>
    			</table>
  				</div>
				</div>

			
			</div>
			<div class="column grid_4">
            <img class="order-photo card-photo" src='<?php echo url::base(); ?>theme/img/admin/misc/not_available.JPG' onerror="this.src='<?php echo url::base(); ?>theme/img/admin/misc/not_available.JPG';">
			<div class="table w100" style="table-layout:fixed;">
                <div class="table-row">
                    <div class="table-cell spacer-input" style="vertical-align: top;">
                    <?php echo Form::input('kiekis','',array('placeholder'=>'Kiekis','id'=>'kiekis','type'=>'number',"class"=>"w100"));   ?>
                    </div>
                    <div class="table-cell spacer-input">
                    
                    <?php echo Form::button('done','Įvykdytas',array('id'=>"done","class"=>"w100")); ?>
                  <?php echo Form::hidden('uzsakymas','',array('id'=>"uzsakymas")); ?>
                    </div>
                </div>
                <div class="table-row spacer-input" style="font-size: 1em; font-family: Verdana, Geneva, sans-serif; color: #555;">
                    <div class="table-cell spacer-input" style="vertical-align: top;">
                    <h2>Likutis:</h2>
                    </div>
                    <div class="table-cell spacer-input">
                    <h2 id="amount">nėra</h2>
                    </div>
                </div>
            </div>
            <div class="spacer-input">
            <p id="card_id"><b>Technologinė kortelė:</b> nėra</p>
            <p id="date"><b>Sukurta/atnaujinta:</b> nėra</p>
            <p id="desc"><b>Aprašymas:</b> nėra</p>
            </div>
            <div class="table w100" style="table-layout:fixed;">
                <div class="table-row">
                    <div class="table-cell spacer-input" style="vertical-align: top;">
                    <?php echo Form::button('view','Sąskaitos peržiūra',array('id'=>"view","class"=>"w100")); ?>
                    </div>
                    <div class="table-cell spacer-input">
                    <?php echo Form::button('send','Sąskaitos siuntimas',array('id'=>"send","class"=>"w100")); ?>
                    </div>
                </div>
            </div>
			</div>
        </div>
		</section>
		<footer>
		</footer>
        <div class="slide-out"></div>
        <div id="result" style="display:none;"></div>