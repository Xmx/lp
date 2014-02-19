
		<?php if(isset($menu)) echo $menu; ?>
		<div class="row">
			<div class="column grid_12 header-bg">
				<span class="header-title">Vartotojų administravimas</span>
			</div>
		</div>
		<div class="row">
			<div class="column grid_12 triangle">
			</div>
		</div>
		<section>
		<div class="row">
			<div class="column grid_6">
					<div class="table w100">
                    <div class="table-row">
                    <div class="table-cell spacer-input" style="vertical-align: top;">
                    <?php echo Form::input('user_name','',array('placeholder'=>'Įveskite el-paštą','class'=>'w100','id'=>'user_name'));   ?>
                    </div>
                    <div class="table-cell spacer-input">
                    
                    <?php echo Form::button('search_name','Rasti',array('id'=>"search_name","class"=>"w100")); ?>
                  
                    </div>
                    </div>
                </div>

					<div class="user-table-wrapper">
  					<div class="user-table-scroll" border="0" style='-moz-user-select: none;-webkit-user-select: none; cursor: pointer;' onselectstart='return false;'>
    				<table class="user-users">
        			<thead>
            			<tr>
                			<th><span class="text">El. paštas</span></th>
                			<th><span class="text">vart ID</span></th>
                			<th><span class="text">aktyvus</span></th>
            			</tr>
        			</thead>
        		<tbody>
					<tr id="" style="background-color:#00b551"> <td>Naujas vartotojas</td><td></td><td></td></tr>
					<?php
					if(isset($users))
					{
  						foreach($users as $user)
  						{
						?>
							<tr id="<?php echo $user->id; ?>" style=""> <td><?php echo $user->email; ?></td> <td class="center"><?php echo $user->id; ?></td> <td class="center"><?php if($user->active) echo'&bull;'; ?></td> </tr>
						<?php
  						}
					}
					?>
        		</tbody>
    			</table>
  				</div>
				</div>

			
			</div>
			<div class="column grid_3">
				<div class="spacer">
					<?php echo Form::open('/ajax/photo/user',array('method'=>'post','id'=>'photo_upload_form')); ?>					
					<div class="photo">
						<div class="photo-confirm-dialog">
							<div class="content">
								<p>Ar norite išsaugoti naują nuotrauką ir pašalinti senesnę?</p>
								<?php echo Form::button('decline_photo','Ne',array('id'=>'decline_photo','onClick'=>'return false;')); ?>
								<?php echo Form::button('confirm_photo','Taip',array('id'=>'confirm_photo','onClick'=>'return false;')); ?>
								
							</div>
						</div>
						<div class="photo-wait-dialog">
							<div class="content">
								<p>Nuotrauka bus įkelta kai sukūrsite naują vartotoją.</p>
							</div>
						</div>
						<div class="photo-alert-dialog">
							<div class="content">
								<p>Failo tipas nėra gif, png , jpg , jpeg tipo.</p>
							</div>
						</div>
						<input type="hidden" value="" name="user_photo_id" id="user_photo_id">
						<img class="user-photo" src='<?php echo url::base(); ?>theme/img/admin/users/default-user.png' onerror="this.src='<?php echo url::base(); ?>theme/img/admin/users/default-user.png';">
											<?php 			
					echo Form::file('user_photo',array('id'=>'user_photo'));
					echo Form::button('upload','Įkelti',array('class'=>'upload-button-support w100','onClick'=>'return false;'));

					?>
					</div>
					<?php
					echo Form::close(); 

					?>
				</div>
			</div>
			<div class="column grid_3">
				<div class="spacer">
			<div class="loading"></div>
			<div class="user-info-wrap">
			<?php echo Form::open('',array('method'=>'post','id'=>'user_info_form')); ?>
				<div class="call_success"></div>
				<input type="hidden" value="" name="id" id="id">
				<input type="hidden" value="create" name="do" id="do">
				<div class="call_error_email"></div>
          		<div class="field">
            	<input name="email" id="email" placeholder="*El. paštas" value="<?php if(isset($email)) echo $email; ?>"
            	type="text">
          		</div>

          		<div class="call_error_password"></div>
            	<div class="field">
            	<input name="pass" id="pass" placeholder="*Naujas slaptažodis" value=""
            	type="password">
            	</div>
          		
            	<div class="field">
            	<input name="pass2" id="pass2" placeholder="*Pakartoti slaptažodį" value=""
            	type="password">
				</div>
          		
          		
            	<div class="field">
            	<input name="company" id="company" placeholder="Įmonė" value="<?php if(isset($company)) echo $company; ?>"
            	type="text">
				</div>

				<div class="call_error_name"></div>
            	<div class="field">
            	<input name="name" id="name" placeholder="Vardas" value="<?php if(isset($name)) echo $name; ?>"
            	type="text">
				</div>
          		
          		<div class="call_error_surname"></div>
            	<div class="field">
            	<input name="surname" id="surname" placeholder="Pavardė" value="<?php if(isset($surname)) echo $surname; ?>"
            	type="text">
				</div>
          		
            	<div class="field">
            	<input name="phone" id="phone" placeholder="Telefonas" value="<?php if(isset($phone)) echo $phone; ?>"
            	type="text">
            	</div>
				
				<select id="companies" name="companies[]" multiple class="w100" height="50">
					<?php foreach ($companies as $company) { ?>
					<option id="<?php echo $company->id; ?>" value="<?php echo $company->id; ?>"><?php echo $company->company; ?></option>
					<?php } ?>
				</select>

            	<div class="table">
            		<div class="table-row">
						<div class="table-cell"><?php echo Form::checkbox('status_admin', '',false,array('id'=>'status_admin')); ?></div>
						<div class="table-cell">Administratorius</div>
					</div>
					<div class="table-row">
						<div class="table-cell"><?php echo Form::checkbox('status_active', '',true,array('id'=>'status_active')); ?></div>
						<div class="table-cell">Aktyvus</div>
					</div>
            	</div>
            	<?php echo Form::submit('action','Sukurti',array('id'=>'action','onClick'=>'return false;')); ?>
            	<?php echo Form::close(); ?>
           </div>

				
			</div>
		</div>
	</div>
		</section>
		<footer>
		</footer>