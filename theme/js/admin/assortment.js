function fnGetSelected( oTableLocal )
{
  var aReturn = new Array();
  var aTrs = oTableLocal.dataTable({
            "bRetrieve": true,
            }).fnGetNodes();
  
  for ( var i=0 ; i<aTrs.length ; i++ )
  {
    if ( $(aTrs[i]).hasClass('selected') )
    {
      aReturn.push( aTrs[i] );
    }
  }
  return aReturn;
}

  $(document).ready(function () {

    var aData = null;
    var bData = null;
    var dupe_done = true;

     $('.table-companies, .table-assortment').dataTable({

    "sScrollY": 400,
        "bPaginate": false,
        "bFilter": false,
        "oLanguage": {
            "sLengthMenu": "Rodyti _MENU_",
            "sZeroRecords": "Nėra rezultatų",
            "sInfo": "",
            "sInfoEmpty": "",
            "sInfoFiltered": "(Viso _MAX_)"
        }
  });

        $('.exit').on('click',function(event){ 
          $('.popup').fadeOut();
        });

        $('#delete').on('click',function() {
          if (null != aData)  
          {


            $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/assortment/delete",
            data: { 'id': aData[0] ,
            },
            cache: false,
            beforeSend: function() {
             
            var anSelected = fnGetSelected($('#DataTables_Table_1'));
            
            aData = $('#DataTables_Table_1').dataTable({
              "bRetrieve": true,
              }).fnDeleteRow(anSelected[0]);
            var msg = 'Kortelė ištrinta';
            $().toastmessage('showSuccessToast', msg);
            aData = null;      
            $('#dupe').hide();
            },
            success : function(data) { 
  
                
              }
            });

          }
          else
          {
            var msg = 'Nepasirinkta jokia kortelė';
            $().toastmessage('showErrorToast', msg);
          }
        });

        $('#dupe').on('click',function() {
          if (null != aData && dupe_done && $('#submit_dupe').length == 0)  
          {
            

             $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/assortment/dupe",
            data: { 'id': aData[0], 'name' : aData[1] ,
            },
            cache: false,
            beforeSend: function() {
            dupe_done = false;
            },
            success : function(data) { 
             aData[0] = data.id;
             aData[1] = "<input type='text' id='submit_dupe'>";
             aData[2] = data.data;
            $('#DataTables_Table_1').dataTable({
            "bRetrieve": true,
            }).fnAddData(aData);

            $('#submit_dupe').attr('value',data.pavadinimas);

            $('#submit_dupe').focus();
            $('#dupe').hide();
            $('.table-assortment tbody tr').removeClass("selected");
            $('#submit_dupe').parent().parent().addClass("selected");
            
              }
            });

            }

          
        });
        

        function update_dupe()
        {
        $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/assortment/update_dupe",
            data: { 'id': aData[0], 'name' : $('#submit_dupe').val() ,
            },
            cache: false,
            beforeSend: function() {
              $('#submit_dupe').parent().html($('#submit_dupe').val());
            },
            success : function(data) { 
             var msg = 'Kortelės kopija sukurta';
           $().toastmessage('showSuccessToast', msg);
              }
            });   
      }

        $('#create_new').on('click',function() {
              $('.popup').fadeIn();


        $(':input','#card-info, #card-photo-upload')
        .not(':button, :submit, :reset, :hidden')
        .val('').prop('checked',false);
        $('.table-assortment tbody tr').removeClass("selected");
        $('.not-new-card').hide();

        if(!$('card').is(":visible")) {
        $('.card-hidden').fadeOut();
        $('.card').fadeIn();
        }

        $('#kiekis').val(0.00);
        $('#history').html('');

        $('.card-photo').attr('src','');



        $('#manage-card').attr('do','create');
        $('#do').val('create');
        $('#manage-card').val('Sukurti');

      });


      $('#search_name').on('click',function(e){
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

       $('#search_card').on('click',function(e){
        if($('#company').val() != "")
        {
        $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/manage/assortment/",
            data: { 'pavadinimas': $('#card_name').val() ,'imone': $('#company').val()
            },
            cache: false,
            beforeSend: function() {
              $('.table-assortment tbody').html('');
              $('#search_card').addClass('loader');
            },
            success : function(data) { 
  
                var new_table_content = '';
                $('#search_card').removeClass('loader');

                data.forEach(function(entry) {
                  new_table_content += '<tr value="'+entry.id+'"> <td>'+entry.pavadinimas+'</td><td></td><td></td><td></td></tr>';
                });

                if(new_table_content == '') new_table_content = 'Nėra rezultatų';

                $('.table-assortment tbody').html(new_table_content);


              }
            });
        }
      });
     
      $('.table-companies tbody').on('click',"tr",function (event) {  
              $('.table-companies tbody tr').removeClass("selected"); 
              $('.table-assortment tbody tr').removeClass("selected");

              if($('#submit_dupe').length != 0)
              {
                
              }
              
              dupe_done = true;

              $('#dupe').hide();

              if($('.card').is(":visible")) {
              $('.card').fadeOut();
              $('.card-hidden').fadeIn();
              }

              aData = null;

              $('.create-new-card-button').css('display','inline-block');
              $('.card-hidden').html('Pasirinkite technologinę kortelę arba sukurkite naują.');

              var nameToSend = $(this).attr('value');
              $('#company').val(nameToSend);

              $(this).addClass("selected");
    
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

              $('#DataTables_Table_1').dataTable({
              "bRetrieve": true,
              }).fnClearTable();
                data.forEach(function(entry) {
                  
                  $('#DataTables_Table_1').dataTable({ "bRetrieve": true }).fnAddData( [entry.id,entry.pavadinimas,entry.data,entry.medziaga,entry.dydis,entry.klijai,entry.tipas] );
                });

                

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
              $('.table-assortment tbody tr').removeClass("selected");

              $(this).addClass("selected");

              $('#dupe').show();

              if($('#submit_dupe').length != 0 && $('#submit_dupe').val() != '')
              {  
                  $.ajax({
                  type: 'post',                   
                  dataType:'json',   
                  url: "/ajax/assortment/update_dupe",
                  data: { 'id': aData[0], 'name' : $('#submit_dupe').val() ,
                  },
                  cache: false,
                  beforeSend: function() {
                  $('#submit_dupe').parent().html($('#submit_dupe').val());
                  },
                  success : function(data) { 
                  var msg = 'Kortelės kopija sukurta';
                  $().toastmessage('showSuccessToast', msg);
                  dupe_done = true;
                  }
                  });       
              
              }

              aData = $('#DataTables_Table_1').dataTable({
              "bRetrieve": true,
              }).fnGetData(this);

              

              $(':input','#card-info, #card-photo-upload')
              .not(':button, :submit, :reset, :hidden')
              .val('').prop('checked',false);
        
              var card_id = $(this).attr('value');
              $('.card-hidden').fadeOut();
              $('.not-new-card').show();
              $('.card').fadeIn();
              $('#history').html('');

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
                else if(key == 'istorija') $('#history').html('<p><b>Užsakymų istorija:</b></p>'+data['istorija']);
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
                        if($(".table-assortment tbody:contains('Nėra kortelių')").length) $('.table-assortment tbody').html('');
                        $('.table-assortment tbody').append('<tr id="'+data.id+'" value="'+data.id+'"> <td>'+data.name+'</td><td></td><td></td><td></td></tr>');

                        $(':input','#card-info, #card-photo-upload')
                        .not(':button, :submit, :reset, :hidden')
                        .val('').prop('checked',false);
                        $('.card-photo').attr('src','');
                        $('#history').html('');

                      }
                      else msg = 'Kortelė atnaujinta';
                      $('.table-assortment tbody tr#'+data.id).html('<td>'+data.name+'</td><td></td><td></td><td></td>');

                      $().toastmessage('showSuccessToast', msg);
                      $('.popup').fadeOut();
                    }
                    else if(data.msg == "err_name_empty")
                    {
                      msg = 'Klaida! Kortelės pavadinimo laukelis negali būti tuščias.';
                      $('.slide-out').html('<label class="slide-error">'+msg+'</label>');
                      $('.slide-out').slideDown().delay(2000).slideUp('slow'); 
                    }
                    else if(data.msg == "err_price")
                    {
                      msg = 'Neteisingas kainos formatas.';
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
            'new_company_address': $("#new_company_address").val() ,
            'new_company_code': $("#new_company_code").val() ,
            'new_company_pvm': $("#new_company_pvm").val() 
            },
            cache: false,
            beforeSend: function() {
              $('#new_company').addClass('loader');
            },
            success : function(data) { 
              $('#new_company').removeClass('loader');
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
                  if($(".table-companies tbody:contains('Nėra rezultatų')").length) $('.table-companies tbody').html('');
                  $('.table-companies tbody').append('<tr value="'+data.company+'"> <td>'+data.company+'</td><td></td><td></td></tr>');
                  $('.table-scroll').jScrollPane();
              }

              $('.slide-out').html('<label class="slide-success">'+msg+'</label>');
              $('.slide-out').slideDown().delay(2000).slideUp('slow'); 
            }
            });

        });

$('#submit_dupe').on('keypress',function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13') {
        
                  console.log('lol');
    update_dupe();
              
    }
});

    });

