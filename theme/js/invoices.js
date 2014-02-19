	var nameToSend = "";
  var nameToSend2 = "";

  $(document).ready(function () {


    function send_companies_1(param)
    {
     $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/invoices/list",
            data: { 'company': nameToSend2, 'from' : $('#invoice_from').val() , 'till' : $('#invoice_till').val()
            },
            cache: false,
            beforeSend: function() {
              
            },
            success : function(data) { 
  
                
                var new_table_content = '';

                data.forEach(function(entry) {
                  new_table_content += '<tr id="invoice_'+entry.id+'" value="'+entry.id+'"><td>'+entry.nr+'</td><td>'+entry.data+'</td><td>'+entry.pabaiga+'</td><td>'+entry.suma+'</td><td>'+entry.klientas+'</td><td>'+entry.imone+'</td><td>'+entry.komentaras+'</td></tr>';
                if(entry.saskaita == 0) all_sum += parseFloat(entry.kaina);
                });

                if(new_table_content != '') 
                {
                  $('.table-invoices tbody').html(new_table_content);
                }
                else $('.table-invoices tbody').html('Nėra kortelių');



                $('.table-scroll').jScrollPane();
                
              }
            });
      }


      $('#search_company_name2').click(function(e){
        $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/companies/list",
            data: { 'company_name': $('#company_name2').val() ,
            },
            cache: false,
            beforeSend: function() {
              $('.table-orders tbody').html('');
              $('#search_company_name2').addClass('loader');
            },
            success : function(data) { 
  
                var new_table_content = '';
                $('#search_company_name2').removeClass('loader');

                data.forEach(function(entry) {
                  new_table_content += '<tr value="'+entry+'"> <td>'+entry+'</td><td></td><td></td></tr>';
                });

                if(new_table_content == '') new_table_content = 'Nėra rezultatų';

                $('.table-companies_2 tbody').html(new_table_content);
                $('.table-scroll').jScrollPane();

              }
            });
      });

      $('#search_company_name').click(function(e){
        $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/companies/list",
            data: { 'company_name': $('#company_name').val() ,
            },
            cache: false,
            beforeSend: function() {
              $('.table-invoices tbody').html('');
              $('#search_company_name').addClass('loader');
            },
            success : function(data) { 
  
                var new_table_content = '';
                $('#search_company_name').removeClass('loader');

                data.forEach(function(entry) {
                  new_table_content += '<tr value="'+entry+'"> <td>'+entry+'</td><td></td><td></td></tr>';
                });

                if(new_table_content == '') new_table_content = 'Nėra rezultatų';

                $('.table-companies_1 tbody').html(new_table_content);
                $('.table-scroll').jScrollPane();

              }
            });
      });

      var result = new Object();

      $('#create').click(function(e){
          var i = 0;
           $('.table-orders tbody tr').each(function( index, element ) {
        var item = new Object();
        item.id = $(this).attr('value');
        if($(this).attr('invoice') == 0)
        {
         result[i] = item;
         i++;
        }
      });

      if(jQuery.isEmptyObject(result))
      {
          msg = "Nėra užsakymų";
           $('.slide-out').html('<label class="slide-error">'+msg+'</label>');
           $('.slide-out').slideDown().delay(2000).slideUp('slow');
      }
      else if($('#invoice_nr').val() == "")
      {
            msg = "Tuščias sąskaitos numeris";
           $('.slide-out').html('<label class="slide-error">'+msg+'</label>');
           $('.slide-out').slideDown().delay(2000).slideUp('slow');
      }
      else
      {
        $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/invoices/create",
            data: { 
              'company' : nameToSend,
              'invoice_nr': $('#invoice_nr').val(),
              'invoice_sum': $('#invoice_sum').val(),
              'invoice_date': $('#invoice_date').val(),
              'invoice_pay': $('#invoice_pay').val(),
              'invoice_comment': $('#invoice_comment').val(),
              'orders': JSON.stringify(result)
            },
            cache: false,
            beforeSend: function() {
             $('#create').addClass('loader');
            },
            success : function(data) { 
             $('#create').removeClass('loader');

             if(data == "msg_ok")
             {
                nameToSend = ''; nameToSend2 = '';
                $('.table-orders tbody, .table-invoices tbody').html('');
                $('.table-companies_1 tbody tr, .table-companies_2 tbody tr').removeClass('selected');
                $('#invoice_nr').val('');
                $('#invoice_sum').val('');
                $('#invoice_comment').val('');
                $('#sum_all').html('0.00');
                
                 msg = "Sąskaita sukurta";
                $('.slide-out').html('<label class="slide-success">'+msg+'</label>');
                $('.slide-out').slideDown().delay(2000).slideUp('slow');
            }
            else if(data == "msg_ex")
            {
                msg = "Sąskaita tokiu numeriu jau egzistuoja";
                $('.slide-out').html('<label class="slide-error">'+msg+'</label>');
                $('.slide-out').slideDown().delay(2000).slideUp('slow');
            }



              }
            });
      }
  });
              
   
                

       
  

  function send_companies_2(param)
  {
     $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/invoices/orders",
            data: { 'company': nameToSend, 'from' : $('#order_from').val() , 'till' : $('#order_till').val() , 'order_name' : $('#order_name').val()
            },
            cache: false,
            beforeSend: function() {
              if(param) $('#search_order_name').addClass('loader');
            },
            success : function(data) { 

                var new_table_content = ''; var all_sum = 0;

                if($('#search_order_name').hasClass('loader')) $('#search_order_name').removeClass('loader');

                function state(val)
                {
                  if(val == 0) return 'sąskaita nekurta';
                  else return 'sąskaita sukurta';
                }


                data.forEach(function(entry) {
                  new_table_content += '<tr id="'+entry.id+'" invoice="'+entry.saskaita+'" value="'+entry.id+'"><td>'+entry.pavadinimas+'</td><td>'+entry.imone+'</td><td>'+entry.data+'</td><td>'+state(entry.saskaita)+'</td><td>'+entry.kaina+'</td></tr>';
                if(entry.saskaita == 0) all_sum += parseFloat(entry.kaina);
                });

                if(new_table_content != '') 
                {
                  $('.table-orders tbody').html(new_table_content);
                  $('#sum_all').html(all_sum.toFixed(2));
                }
                else $('.table-orders tbody').html('Nėra kortelių');



                $('.table-scroll').jScrollPane();

              }
            });

          $('.table-invoices tbody').on('click',"tr",function (event) {  
              $('.table-invoices tbody tr').css("background-color",""); 
              $('.table-invoices tbody tr').css("color","");  

              $(this).css("background-color", "#00b551");
              $(this).attr('style', function(i,s) { return s + 'color: #fff !important;' });

            });
  }

  $('#order_till, #order_from').change(function(e) {
      if(nameToSend != "") send_companies_2(0);
  });

  $('#invoice_till, #invoice_from').change(function(e) {
      if(nameToSend2 != "") send_companies_1(0);
  });

  $('#search_order_name').click(function(e) {
      if(nameToSend != "") send_companies_2(1);
  });

  $('.table-companies_1 tbody').on('click',"tr",function (event) {  

              $('.table-companies_1 tbody tr').removeClass('selected');
              $(this).addClass('selected')

              nameToSend2 = $(this).attr('value');

              send_companies_1(0);

    });

  $('.table-companies_2 tbody').on('click',"tr",function (event) {  

              $('.table-companies_2 tbody tr').removeClass('selected');
              $(this).addClass('selected')

              nameToSend = $(this).attr('value');

              send_companies_2(0);

        });


    });

  $('#order_name').keypress(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13') {
        $('#search_order_name').trigger( "click" );  
    }
});

  $('#company_name2').keypress(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13') {
        $('#search_company_name2').trigger( "click" );  
    }
});
  $('#company_name').keypress(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13') {
        $('#search_company_name').trigger( "click" );  
    }
});