	$(document).ready(function () {


      $('#search_name').click(function(e){
        $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/companies/list",
            data: { 'company_name': $('#company_name').val() ,
            },
            cache: false,
            beforeSend: function() {
              $('.table-assortment tbody').html('');
              $('#search_name').addClass('loader');
            },
            success : function(data) { 
  
                var new_table_content = '';
                $('#search_name').removeClass('loader');

                data.forEach(function(entry) {
                  new_table_content += '<tr value="'+entry+'"> <td>'+entry+'</td><td></td><td></td></tr>';
                });

                if(new_table_content == '') new_table_content = 'Nėra rezultatų';

                $('.table-companies tbody').html(new_table_content);

              }
            });
      });
     
      $('.table-companies tbody').on('click',"tr",function (event) {  
              //$('.table-companies tbody tr').removeClass('selected');



              if($(this).hasClass('selected') && $(this).attr('value') != '') $(this).removeClass('selected')
              else if(!$(this).hasClass('selected') && $(this).attr('value') != '') $(this).addClass('selected')
              
              if($(this).hasClass('selected') && $(this).attr('value') == '') $('.table-companies tbody tr').removeClass('selected');
              else if(!$(this).hasClass('selected') && $(this).attr('value') == '') $('.table-companies tbody tr').addClass('selected');

              var nameToSend = $(this).attr('value');
              $('#company').val(nameToSend);

              
            $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/companies/assortment",
            data: { 'name': nameToSend ,
            },
            cache: false,
            beforeSend: function() {
              $('.table-assortment tbody').html('');
            },
            success : function(data) { 

                var new_table_content = '';


                data.forEach(function(entry) {
                  new_table_content += '<tr id="'+entry.id+'" value="'+entry.id+'"> <td>'+entry.pavadinimas+'</td><td></td><td></td><td></td></tr>';
                });

                if(new_table_content != '') $('.table-assortment tbody').html(new_table_content);
                else $('.table-assortment tbody').html('Nėra kortelių');

              }
            });

        });

    function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('.card-photo').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
            }
          }

        

      $('.table-assortment tbody').on('click',"tr",function (event) {  
              $('.table-assortment tbody tr').css("background-color",""); 
              $('.table-assortment tbody tr').css("color","");  

              $(this).css("background-color", "#00b551");
              $(this).attr('style', function(i,s) { return s + 'color: #fff !important;' });

              $(':input','#card-info, #card-photo-upload')
              .not(':button, :submit, :reset, :hidden')
              .val('').prop('checked',false);
        
              var card_id = $(this).attr('value');
              $('.card-hidden').fadeOut();
              $('.not-new-card').show();
              $('.card').fadeIn();

              $('.card-photo').attr('src','/cards/'+card_id+'.jpg?'+event.timeStamp);

              $('#card-id').html('ID'+card_id);
              $('#id').val(card_id);

              $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/assortment/get",
            data: { 'id': card_id ,
            },
            cache: false,
            beforeSend: function() {
              
            $(':input','#card-info')
            .not(':button, :submit, :reset, :hidden')
            .val('').prop('checked',false);

            },
            success : function(data) { 

               $('#manage-card').attr('do','edit');
               $('#do').val('edit');
               $('#manage-card').val('Redaguoti');

               for(var key in data) {
                $('#'+key).val(data[key]);
                if(key == 'busena')
                {
                    if(data[key] == 1) $('#data').html('<b>Atnaujinta: </b>'+data['data']);
                    else $('#data').html('<b>Sukurta: </b>'+data['data']);
                }
              }

              }
            });

        });

        $('#card_photo').on('change',function() {

            var ext = $('#card_photo').val().split('.').pop().toLowerCase();
            var msg = "";

            if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
                  msg = "Failo tipas nėra gif, png , jpg , jpeg tipo";
                   $('.slide-out').html('<label class="slide-error">'+msg+'</label>');
                    $('.slide-out').slideDown().delay(2000).slideUp('slow'); 
            }
            else
            {
                readURL(this);
                msg = "Nuotrauka bus įkelta atnaujinus arba sukūrus technologinę kortelę";
                $('.slide-out').html('<label class="slide-success">'+msg+'</label>');
                $('.slide-out').slideDown().delay(2000).slideUp('slow'); 
            }
          });

            $('#card-info').ajaxForm({
              dataType:  'json', 
        beforeSend: function() {
        $('#manage-card').addClass('loader');
        $('#manage-card').attr("disabled", true);

        },
        uploadProgress: function(event, position, total, percentComplete) {

        },
         success: function(data) {

                var msg = '';
                    if(data.msg == 'c_ok' || data.msg == 'e_ok')
                    {
                      if(data.msg == 'c_ok') {
                        msg = 'Kortelė sukurta';

                        $('.table-assortment tbody').append('<tr id="'+data.id+'" value="'+data.id+'"> <td>'+data.name+'</td><td></td><td></td><td></td></tr>');

                        $(':input','#card-info, #card-photo-upload')
                        .not(':button, :submit, :reset, :hidden, #company')
                        .val('').prop('checked',false);


                      }
                      else msg = 'Kortelė atnaujinta';
                      $('.table-assortment tbody tr#'+data.id).html('<td>'+data.name+'</td><td></td><td></td><td></td>');

                      $('#data').html('<b>Atnaujinta:</b> '+data.date+'');

                      $('.slide-out').html('<label class="slide-success">'+msg+'</label>');
                      $('.slide-out').slideDown().delay(2000).slideUp('slow'); 
                    }
                    else if(data.msg == "err_name_empty")
                    {
                      msg = 'Klaida! Kortelės pavadinimo laukelis negali būti tuščias.';
                      $('.slide-out').html('<label class="slide-error">'+msg+'</label>');
                      $('.slide-out').slideDown().delay(2000).slideUp('slow'); 
                    }
        },
        complete: function(xhr) {
       $('#manage-card').removeClass('loader');
       $('#manage-card').removeAttr('disabled');
         } 
        }); 


        $('#new_company').click(function(e){

           $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/companies/new",
            data: { 'new_company_name': $("#new_company_name").val() ,
            },
            cache: false,
            beforeSend: function() {

            },
            success : function(data) { 

              if(data.msg == 'err_empt')
              {
                  msg = 'Tuščias įmonės laukelis';
              }
              else if(data.msg == 'err_exist')
              {
                  msg = 'Įmonė tokia pavadinimu jau egzistuoja';
              }
              else
              {
                  msg = 'Įmonė sukurta';
                  $('.table-companies tbody').append('<tr value="'+data.company+'"> <td>'+data.company+'</td><td></td><td></td></tr>');
              }

              $('.slide-out').html('<label class="slide-success">'+msg+'</label>');
              $('.slide-out').slideDown().delay(2000).slideUp('slow'); 
            }
            });

        });

    });