
		<?php if(isset($menu)) echo $menu; ?>
		<section>
           <div class="row">
            <div class="column grid_12 header-bg">
                <span class="header-title">Tech. kortelių parametrai</span>
            </div>
        </div>
        <div class="row">
            <div class="column grid_12 triangle">
            </div>
        </div>
        <div class="spacer_20"></div>
        <div class="row">
			<div class="column grid_3">
                <div class="table w100">
                    <div class="table-row">
                    <div class="table-cell spacer-input" style="vertical-align: top;">
                    <?php echo Form::input('name','',array('placeholder'=>'Įveskite pavadinimą','class'=>'w100','id'=>'name'));   ?>
                    </div>
                    </div>
                    <div class="table-row">
                    <div class="table-cell spacer-input">
                    
                    <?php echo Form::button('search_name','Rasti',array('id'=>"search_name","class"=>"w100")); 
                    echo Form::hidden('user',$_SESSION['user'],array('id'=>'user'));
                    ?>
                  
                    </div>
                    </div>
                </div>
					<div class="table-wrapper">
  					<div class="table-scroll" cellpadding="0" cellspacing="0" border="0" style='-moz-user-select: none;-webkit-user-select: none; cursor: pointer;' onselectstart='return false;'>
    				<table class="table-assort">
        		<tbody>
                    <?php
                        if(isset($assortment))
                        {
                            foreach ($assortment as $a) {
                               ?><tr value="<?php echo $a->id; ?>"> <td><?php echo $a->pavadinimas; ?> </td><td></td><td></td></tr> <?php
                            }
                        }
                    ?>
        		</tbody>
    			</table>
  				</div>
				</div>
			</div>
			<div class="column grid_9">
            <p><b>Technologinė kortelė: </b><span id="card_id">nėra</span></p>
                        <img class="card-photo" id="card-photo" src='<?php echo url::base(); ?>theme/img/admin/misc/not_available.JPG' onerror="this.src='<?php echo url::base(); ?>theme/img/admin/misc/not_available.JPG';">
			</div>


            </div>
        </div>
		</section>
		<footer>
		</footer>
        <div class="slide-out"></div>