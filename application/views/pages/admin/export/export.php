
		<?php if(isset($menu)) echo $menu; ?>
		<section>
        <div class="row">
            <div class="column grid_12 header-bg">
                <span class="header-title">Sąskaitų eksportavimas</span>
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
                    
                    <?php echo Form::button('search_company_name','Rasti',array('id'=>"search_company_name","class"=>"w100")); ?>
                  
                    </div>
                    </div>
                    </div>
            </div>
            <div class="column grid_3">
                <p>Nuo:</p><?php echo Form::input('invoice_from',date('Y-m-d',time()-86400),array('id'=>'invoice_from',"type"=>"date"));   ?>
            </div>
            <div class="column grid_3">
                <p>Iki:</p><?php echo Form::input('invoice_till',date('Y-m-d'),array('id'=>'invoice_till',"type"=>"date"));   ?>
            </div>
        </div>
        <div class="row">
            <div class="column grid_3">
                
                    <div class="table-wrapper">
                    <div class="table-scroll" cellpadding="0" cellspacing="0" border="0" style='-moz-user-select: none;-webkit-user-select: none; cursor: pointer;' onselectstart='return false;'>
                    <table class="table-companies_1">
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
            <div class="column grid_9">

                    <div class="table-wrapper">
                    <div class="table-scroll" cellpadding="0" cellspacing="0" border="0" style='-moz-user-select: none;-webkit-user-select: none; cursor: pointer;' onselectstart='return false;'>
                    <table class="table-invoices">
                        <thead>
                        <tr>
                            <th><span class="text">N.R.</span></th>
                            <th><span class="text">Data</span></th>
                            <th><span class="text">Apmokėti iki</span></th>
                             <th><span class="text">Suma</span></th>
                             <th><span class="text">Klientas</span></th>
                             <th><span class="text">Įmonė</span></th>
                             <th><span class="text">Komentaras</span></th>
                        </tr>
                    </thead>
                <tbody>
                </tbody>
                </table>
                </div>
                </div>

            
            </div>
   
        </div>
        <div class="spacer_20"></div>
		</section>
		<footer>
		</footer>
        <div class="slide-out"></div>