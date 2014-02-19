
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
            <div class="column grid_3">
                    <div class="table w100">
                    <div class="table-row">
                    <div class="table-cell spacer-input" style="vertical-align: top;">
                    <?php echo Form::input('company_name2','',array('placeholder'=>'Įveskite pavadinimą','class'=>'w100','id'=>'company_name2'));   ?>
                    </div>
                    </div>
                    <div class="table-row">
                    <div class="table-cell spacer-input">
                    
                    <?php echo Form::button('search_company_name2','Rasti',array('id'=>"search_company_name2","class"=>"w100")); ?>
                  
                    </div>
                    </div>
                    </div>
            </div>
            <div class="column grid_3">
                <div class="table w100">
                    <div class="table-row">
                    <div class="table-cell spacer-input" style="vertical-align: top;">
                    <?php echo Form::input('order_name','',array('placeholder'=>'Įveskite pavadinimą','class'=>'w100','id'=>'order_name'));   ?>
                    </div>
                    </div>
                    <div class="table-row">
                    <div class="table-cell spacer-input">
                    
                    <?php echo Form::button('search_order_name','Rasti',array('id'=>"search_order_name","class"=>"w100")); ?>
                  
                    </div>
                    </div>
                </div>
            </div>
            <div class="column grid_3">
                <p>Nuo:</p><?php echo Form::input('order_from',date('Y-m-d',time()-86400),array('id'=>'order_from',"type"=>"date"));   ?>
            </div>
            <div class="column grid_3">
                <p>Iki:</p><?php echo Form::input('order_till',date('Y-m-d'),array('id'=>'order_till',"type"=>"date"));   ?>
            </div>
        </div>

        <div class="row" style="border-top: dashed 1px #efefef;">
            <div class="column grid_3">
                
                    <div class="table-wrapper">
                    <div class="table-scroll" cellpadding="0" cellspacing="0" border="0" style='-moz-user-select: none;-webkit-user-select: none; cursor: pointer;' onselectstart='return false;'>
                    <table class="table-companies_2">
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
            <div class="column grid_6">

                    <div class="table-wrapper">
                    <div class="table-scroll" cellpadding="0" cellspacing="0" border="0" style='-moz-user-select: none;-webkit-user-select: none; cursor: pointer;' onselectstart='return false;'>
                    <table class="table-orders">
                        <thead>
                        <tr>
                            <th><span class="text">Pavadinimas</span></th>
                            <th><span class="text">Įmonė</span></th>
                            <th><span class="text">Data</span></th>
                            <th><span class="text">Būsena</span></th>
                             <th><span class="text">Suma</span></th>
                        </tr>
                    </thead>
                <tbody>
                </tbody>
                </table>
                </div>
                </div>

            
            </div>
            <div class="column grid_3">
                <?php echo Form::input('invoice_nr','',array('placeholder'=>'Sąskaitos nr.','type'=>'number','id'=>"invoice_nr","class"=>"w100")); ?>
                <?php echo Form::input('invoice_sum','',array('placeholder'=>'Suma žodžiais','id'=>"invoice_sum","class"=>"w100")); ?>
                <p>Sąskaitos data:</p>
                <?php echo Form::input('invoice_date',date('Y-m-d'),array('type'=>'date','id'=>"invoice_date","class"=>"w100")); ?>
                <p>Sąskaitos apmokėjimo data</p>
                <?php echo Form::input('invoice_pay',date('Y-m-d',time()+(29*24*60*60)),array('type'=>'date','id'=>"invoice_pay","class"=>"w100")); ?>
                 <?php echo Form::input('invoice_comment','',array('placeholder'=>'Komentaras','id'=>"invoice_comment","class"=>"w100")); ?>
                <p>Iš viso: <span id="sum_all"></span></p>
                <p>PVM: <span id="sum_pvm"></span></p>
                <p>Iš viso su PVM: <span id="sum_all_pvm"></span></p>
                <?php echo Form::button('create','Sukurti',array('id'=>"create","class"=>"w100")); ?>
            </div>
     
   
        </div>

        <div class="spacer_40"></div>
		</section>
		<footer>
		</footer>
        <div class="slide-out"></div>