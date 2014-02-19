
		<?php if(isset($menu)) echo $menu; ?>
		<section>
        <div class="row">
            <div class="column grid_12 header-bg">
                <span class="header-title">Asortimentas</span>
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
                    <?php echo Form::input('new_company_name','',array('placeholder'=>'Nauja įmonė','class'=>'w100','id'=>'new_company_name'));   ?>
                    <?php echo Form::input('new_company_address','',array('placeholder'=>'Adresas','class'=>'w100','id'=>'new_company_address'));   ?>
                    <?php echo Form::input('new_company_code','',array('placeholder'=>'Įmonės kodas','class'=>'w100','id'=>'new_company_code'));   ?>
                    <?php echo Form::input('new_company_pvm','',array('placeholder'=>'PVM kodas','class'=>'w100','id'=>'new_company_pvm'));   ?>
                    </div>
                    </div>
                    <div class="table-row">
                    <div class="table-cell spacer-input">
                    
                    <?php echo Form::button('new_company','Sukurti',array('id'=>"new_company","class"=>"w100")); ?>
                  
                    </div>
                    </div>
                </div>
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
			<div class="column grid_3">
                <div class="table w100">
                    <div class="table-row">
                    <div class="table-cell spacer-input" style="vertical-align: top;">
                    <?php echo Form::input('card_name','',array('placeholder'=>'Įveskite pavadinimą','class'=>'w100','id'=>'card_name'));   ?>
                    </div>
                    </div>
                    <div class="table-row">
                    <div class="table-cell spacer-input">
                    
                    <?php echo Form::button('search_card','Rasti',array('id'=>"search_card","class"=>"w100")); ?>
                  
                    </div>
                    </div>
                </div>
					<div class="table-wrapper">
  					<div class="table-scroll table-high" cellpadding="0" cellspacing="0" border="0" style='-moz-user-select: none;-webkit-user-select: none; cursor: pointer;' onselectstart='return false;'>
    				<table class="table-assortment">
                        <thead>
                        <tr>
                            <th><span class="text">Pavadinimas</span></th>
                            <th><span class="text"></span></th>
                            <th><span class="text"></span></th>
                             <th><span class="text"></span></th>
                        </tr>
                    </thead>
        		<tbody>
        		</tbody>
    			</table>
  				</div>
				</div>

			
			</div>
			<div class="column grid_6">
             <div class="w100 create-new-card-button"><?php echo Form::button('create_new','Sukurti naują',array('id'=>"create_new",'class'=>'left')); ?></div>
            <div class="card" style="display:none;">
            <?php echo Form::open('/ajax/assortment/manage',array('method'=>'post','id'=>'card-info','enctype'=>'multipart/form-data')); ?>
            <div class="row bottom-border">
            <div class="column grid_3" style="overflow:visible;">

            <div class="not-new-card">
            <p><b>Technologinė kortelė:</b><span id="card-id"></span></p>
            <p id="data"><b>Sukurta/atnaujinta:</b> 2013-04-10</p>
            </div>
            <?php echo Form::hidden('id','',array('id'=>'id')) ?>
            <?php echo Form::hidden('company','',array('id'=>'company')) ?>
            <?php echo Form::hidden('do','create',array('id'=>'do')) ?>
            <b>Pavadinimas :</b>
            <?php echo Form::input('pavadinimas','',array('id'=>'pavadinimas','class'=>'w100')) ?>  
            <b>Aprašymas :</b>
            <?php echo Form::textarea('aprasymas','',array('id'=>'aprasymas','class'=>'w100')); ?>
            </div>

            <div class="column grid_3">
            <div>
            <img class="card-photo" src='<?php echo url::base(); ?>theme/img/admin/misc/not_available.JPG' onerror="this.src='<?php echo url::base(); ?>theme/img/admin/misc/not_available.JPG';">
            </div>
            <?php
            echo Form::file('card_photo',array('id'=>'card_photo'));
            echo Form::button('upload','Įkelti',array('class'=>'upload-button-support w100','onClick'=>'return false;'));

            ?>
            <div id="history"></div>
	        </div>
            </div>
            <div class="column grid_6">
            <b>Dydis :</b>
            </div>
            <div class="row">
            <div class="column grid_3">
            <?php echo Form::input('x','',array('id'=>'x','class'=>'w100')); ?>
            </div>
            <div class="column grid_3">
            <?php echo Form::input('y','',array('id'=>'y','class'=>'w100')); ?> 
            </div>            
            </div>
            <div class="row">
            <div class="column grid_3" style="overflow:visible;">
            <b>Medžiaga :</b>
            <?php echo Form::input('medziaga','',array('id'=>'medziaga','class'=>'w100')); ?>
            </div>
            <div class="column grid_3">
            <b>Tipas(tagai) :</b>
            <?php echo Form::input('tagai','',array('id'=>'tagai','class'=>'w100')); ?>  

            </div>
            </div>
            <div class="row">
                <div class="column grid_1">
                    <b>Spauda:</b>
                    <?php echo Form::input('spauda','',array('id'=>'spauda','class'=>'w100')); ?>  
                </div>
                <div class="column grid_1">
                    <b>Folija:</b>
                    <?php echo Form::input('folija','',array('id'=>'folija','class'=>'w100')); ?>  
                </div>
                <div class="column grid_1">
                    <b>Lakas:</b>
                    <?php echo Form::input('lakas','',array('id'=>'lakas','class'=>'w100')); ?>  
                </div>
                <div class="column grid_2" style="overflow:visible;">
                    <b>Perforacija:</b>
                    <?php echo Form::input('perforacija','',array('id'=>'perforacija','class'=>'w100')); ?>  
                </div>   
            </div>
            <div class="spacer_20"></div>
             <div class="row">
                <div class="column grid_2">
                    <b>Klijai:</b>
                    <?php echo Form::input('klijai','',array('id'=>'klijai','class'=>'w100')); ?>  
                </div>
            </div>
            <div class="row">
                <div class="column grid_6">
                    <b>Užsakomas kiekis:</b>
                </div>
            </div>
            <div class="row">
                <div class="column grid_3">
                    <b>Atvežti:</b>
                    <?php echo Form::input('atvezti','',array('id'=>'atvezti','class'=>'w100')); ?>  
                </div>
                <div class="column grid_3">
                    <b>Į sandėlį:</b>
                    <?php echo Form::input('i_sandeli','',array('id'=>'i_sandeli','class'=>'w100')); ?>  
                </div>
                
            </div>
            <div class="spacer_20"></div>
            <div class="row bottom-border">
                <div class="column grid_6">
                    <b>Suvyniojimas ir iškirtimas pagal schemą: (A-rulonais išorinis, B - rulonais vidinis, C-lapais)</b>
                </div>
            </div>
            <div class="row">
                <div class="column grid_2">
                    <b>Suvyniojimas:</b>
                </div>
                <div class="column grid_2">
                    <?php echo Form::input('suvyniojimas','',array('id'=>'suvyniojimas','class'=>'w100')); ?>
                </div>
            </div>
            <div class="row">
                <div class="column grid_1">
                    <b>Padėtis rulone (1-4):</b>
                </div>
                <div class="column grid_1">
                    <b>Ød, mm:</b>
                </div>
                <div class="column grid_1">
                    <b>ØD, mm:</b>
                </div>
                <div class="column grid_1">
                    <b>h1, mm:</b>
                </div>
                <div class="column grid_1">
                    <b>B1, mm:</b>
                </div>
            </div>
            <div class="row">
                <div class="column grid_1">
                    <?php echo Form::input('padetis_rulone','',array('id'=>'padetis_rulone','class'=>'w100')); ?>
                </div>
                <div class="column grid_1">
                    <?php echo Form::input('Odd','',array('id'=>'Odd','class'=>'w100')); ?>
                </div>
                <div class="column grid_1">
                    <?php echo Form::input('OD','',array('id'=>'OD','class'=>'w100')); ?>
                </div>
                <div class="column grid_1">
                    <?php echo Form::input('h1','',array('id'=>'h1','class'=>'w100')); ?>
                </div>
                <div class="column grid_1">
                    <?php echo Form::input('B1','',array('id'=>'B1','class'=>'w100')); ?>
                </div>
            </div>
            <div class="row">
                <div class="column grid_2">
                    <b>Kaina vnt. :</b>
                </div>
                <div class="column grid_2">
                    <b>Etikečių kiekis rulone, vnt.:</b>
                </div>
                <div class="column grid_2">
                </div>
            </div>
            <div class="row">
                <div class="column grid_2">
                    <?php echo Form::input('kiekis',0.00,array('id'=>'kiekis','class'=>'w100','type'=>'number','step'=>"0.01")); ?>
                </div>
                <div class="column grid_2">
                    <?php echo Form::input('rulone','',array('id'=>'rulone','class'=>'w100')); ?>
                </div>
                <div class="column grid_2">
                    <?php echo Form::submit('manage-card','Sukurti',array('id'=>'manage-card','do'=>'create','class'=>'w100')); ?>
                </div>
            </div>
            <div class="call_success"></div>

            </div>

           
			</div>
             <?php echo Form::close(); ?>
            <div class="card-hidden">
            Pasirinkite įmonę ir technologinę kortelę arba sukurkite naują.
            </div>
            </div>
        </div>
		</section>
		<div class="spacer_20"></div>
        <div class="slide-out"></div>