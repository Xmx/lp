	$(document).ready(function () {
    /*
 ___   _ _____ _             _       _             
|   \ /_\_   _/_\    _ _ ___| |_ _ _(_)_____ _____ 
| |) / _ \| |/ _ \  | '_/ -_)  _| '_| / -_) V / -_)
|___/_/ \_\_/_/ \_\ |_| \___|\__|_| |_\___|\_/\___|

    */    

          var timestamp = new Date();

          function convert_props(prop)
          {
            if(prop == 1) return true;
            else return false;
          }

        
			
        $('.user-users tbody').on('click',"tr",function (event) {
     
          		$('tr').css("background-color","");  
          		$(this).css("background-color", "#00b551");
              $('.photo-confirm-dialog').slideUp();

          		
              $('#user_photo_id').val('');

          		 $(':input','#user_info_form, #photo_upload_form')
 				.not(':button, :submit, :reset, :hidden')
 				.val('').prop('checked',false);
 				/*.removeAttr('checked')
 				.removeAttr('selected');
				*/

          		var user_id = $(this).attr('id');
               $('.user-photo').attr('src','/users/'+user_id+'.jpg?'+event.timeStamp);
          		
          		if(user_id != '') {
          			$('#pass').attr('placeholder','*Naujas slaptažodis');

          			$.ajax({
   				 	type: 'post',                   
    				dataType:'json',   
   			    	url: "/ajax/user/info",
    				data: { 'user_id': user_id ,
   					},
    				cache: false,
            beforeSend: function() {
              $('.user-info-wrap').hide();
              $('.loading').show();

            },
            complete: function(){
              $('.loading').hide();    
              $('.user-info-wrap').show();
              //$('.user-photo').attr('src',ImageExist($('#id').val()));

            },
    				success : function(data) { 
    				$('#id').val(data[0]); 
            $('#user_photo_id').val(data[0]);
        			$('#email').val(data[1]);

              if(data[2] !==null && data[2].length!== 0)
              {
                  data[2].forEach(function(company) {
                   
                      $("#companies #"+company).prop('selected', true);
                  });
              }
        			
                
        			$('#name').val(data[3]);
        			$('#surname').val(data[4]);
        			$('#phone').val(data[5]);
              $('#status_admin').prop('checked',convert_props(data[6]));
              $('#status_active').prop('checked',convert_props(data[7]));
        			$('#action').val('Redaguoti');
              $('#do').val('edit');
              
        			}
    				});
    			}


    			$('#pass').attr('placeholder','*Slaptažodis');
    			$('#action').val('Sukurti');
          $('#do').val('create');
            
    			
          	});

/*
 ___   _ _____ _                     _         __             _      _       
|   \ /_\_   _/_\    __ _ _ ___ __ _| |_ ___  / /  _ _ __  __| |__ _| |_ ___ 
| |) / _ \| |/ _ \  / _| '_/ -_) _` |  _/ -_)/ / || | '_ \/ _` / _` |  _/ -_)
|___/_/ \_\_/_/ \_\ \__|_| \___\__,_|\__\___/_/ \_,_| .__/\__,_\__,_|\__\___|
                                                    |_|                      
*/

        function check_if_active(bull)
        {
            if(bull == 1) return '&bull;';
            else return '';
        }

        $('#action').click(function() {
          var done = $('#do').val();
            $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/user/manage",
            data:  $("#user_info_form").serialize() ,
            
            cache: false,
            success : function(data) { 
     
          
          
          if(data.ok == true && done == 'edit')
          {
            $('.call_success').html('<label class="success">Vartotojas atnaujintas.</label>');
             $('.call_success').fadeIn().delay(2000).fadeOut('slow');
             $('tr#'+$("#id").val()).html('<td>'+data.user.email+'</td><td class="center">'+$("#id").val()+'</td><td class="center">'+check_if_active(data.user.status_active)+'</td>')
            
            
          }
          else if(data.ok == true && done == 'create')
          {
            $('#user_photo_id').val(data.user.id);
            $('#photo_upload_form').submit();
            $('.call_success').html('<label class="success">Vartotojas sukurtas.</label>');
             $('.call_success').fadeIn().delay(2000).fadeOut('slow'); 
               $('.user-users tbody').append('<tr id="'+data.user.id+'"><td>'+data.user.email+'</td><td class="center">'+data.user.id+'</td><td class="center">'+check_if_active(data.user.status_active)+'</td></tr>')

             $('#user_photo_id').val('');
             $('.user-photo').attr('src','');

               $(':input','#user_info_form, #photo_upload_form')
              .not(':button, :submit, :reset, :hidden')
            .val('').prop('checked',false);
          }
          else
          {
             $('.call_error_email').html('<label class="error">'+data.errors.email+'</label>');
             $('.call_error_email').fadeIn().delay(2000).fadeOut('slow'); 

             $('.call_error_password').html('<label class="error">'+data.errors.password+'</label>');
             $('.call_error_password').fadeIn().delay(2000).fadeOut('slow'); 

             $('.call_error_name').html('<label class="error">'+data.errors.name+'</label>');
             $('.call_error_name').fadeIn().delay(2000).fadeOut('slow'); 
             $('.call_error_surname').html('<label class="error">'+data.errors.surname+'</label>');
             $('.call_error_surname').fadeIn().delay(2000).fadeOut('slow'); 
          }
        }
        });

      });
/*
/ )( \/ ___)(  __)(  _ \  (  _ \/ )( \ /  \(_  _)/  \   / )( \(  _ \(  )   /  \  / _\ (    \
) \/ (\___ \ ) _)  )   /   ) __/) __ ((  O ) )( (  O )  ) \/ ( ) __// (_/\(  O )/    \ ) D (
\____/(____/(____)(__\_)  (__)  \_)(_/ \__/ (__) \__/   \____/(__)  \____/ \__/ \_/\_/(____/
*/

    $('#photo_upload_form').ajaxForm({
        beforeSend: function() {
              
        },
        uploadProgress: function(event, position, total, percentComplete) {

        },
         success: function() {
        
        },
        complete: function(xhr) {
       
         } 
        }); 


          function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('.user-photo').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
            }
          }


          $('#user_photo').on('change',function() {

            var ext = $('#user_photo').val().split('.').pop().toLowerCase();

            if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
                   $('.photo-alert-dialog').slideDown().delay(2400).slideUp();
            }
            else
            {
                readURL(this);
                if($('#user_photo_id').val() != '')
                {
                    $('.photo-confirm-dialog').hide();
                    $('.photo-confirm-dialog').slideDown();
                }
                else
                {
                    $('.photo-wait-dialog').slideDown().delay(2400).slideUp();
                }
            }
          });


          $('#decline_photo').click(function(e) {
              $('.photo-confirm-dialog').slideUp();
              $('.user-photo').attr('src','/users/'+$('#id').val()+'.jpg?'+e.timeStamp);
               $(':input','#photo_upload_form')
        .not(':button, :submit, :reset, :hidden')
        .val('');
               return false;
            });

          $('#confirm_photo').click(function(e) {
              $('.photo-confirm-dialog').slideUp();
              $('#photo_upload_form').submit();
              $(':input','#photo_upload_form')
        .not(':button, :submit, :reset, :hidden')
        .val('');


            });


          $('#search_name').click(function(e){
        $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/user/search",
            data: { 'user_name': $('#user_name').val() ,
            },
            cache: false,
            beforeSend: function() {
              $('#search_name').addClass('loader');
            },
            success : function(data) { 

              
  
                var new_table_content = '<tr id=""> <td>Naujas vartotojas</td><td class="center"></td><td class="center"></td></tr>';
                $('#search_name').removeClass('loader');

                data.forEach(function(entry) {
                  new_table_content += '<tr id="'+entry.id+'"> <td>'+entry.email+'</td><td class="center">'+entry.id+'</td><td class="center">'+check_if_active(entry.active)+'</td></tr>';
                });

                $('.user-users tbody').html(new_table_content);

              }
            });
      });
          

    });


