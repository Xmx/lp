	$(document).ready(function () {

      var invoice = 0;

      $('#search_name').click(function(e){
        $('.order-photo').attr('src','');
        $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/companies/list",
            data: { 'company_name': $('#company_name').val() ,
            },
            cache: false,
            beforeSend: function() {
              $('.table-orders tbody').html('');
              $('.table-assortment tbody').html('');
              $('#search_name').addClass('loader');
             
            },
            success : function(data) { 
              var new_table_content = '';
                $('#search_name').removeClass('loader');
  
                var new_table_content = '';

                data.forEach(function(entry) {
                  new_table_content += '<tr value="'+entry+'"> <td>'+entry+'</td><td></td><td></td></tr>';
                });

                $('.table-companies tbody').html(new_table_content);

              }
            });
      });

      var orders = '';
     
      $('.table-companies tbody').on('click',"tr",function (event) {  
              $('.table-companies tbody tr').css("background-color","");  
              $('.table-orders tbody tr').css("color",""); 
              $('.order-photo').attr('src','');
              var nameToSend = $(this).attr('value');

              $(this).css("background-color", "#00b551");
              $(this).attr('style', function(i,s) { return s + 'color: #fff !important;' });
       
            $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/companies/orders",
            data: { 'name': nameToSend ,
            },
            cache: false,
            beforeSend: function() {
              $('.table-orders tbody').html('');
            },
            success : function(data) { 

                var new_table_content = '';
                orders = data;

                data.forEach(function(entry) {
                  new_table_content += '<tr assortment="'+entry.asortimentas+'" value="'+entry.id+'"> <td>'+entry.data+'</td><td>'+entry.pavadinimas+'</td><td id="amount_'+entry.id+'">'+entry.kiekis+'.vnt</td><td id="status_'+entry.id+'">'+entry.busena+'</td></tr>';
                });

                if(new_table_content != '') $('.table-orders tbody').html(new_table_content);
                else $('.table-orders tbody').html('Nėra užsakymų');
                $('.table-scroll').jScrollPane();
              }
            });

        });

      $('.table-orders tbody').on('click',"tr",function (event) {  
              $('.table-orders tbody tr').css("background-color",""); 
              $('.table-orders tbody tr').css("color","");  

              $(this).css("background-color", "#00b551");
              $(this).attr('style', function(i,s) { return s + 'color: #fff !important;' });
  
              

              $('.order-photo').attr('src','/cards/'+$(this).attr('assortment')+'.jpg');

              order_id = $(this).attr('value');
              $('#uzsakymas').attr('value',order_id);

              orders.forEach(function(entry) {
                  if(entry.id == order_id)
                  {
                    $('#card_id').html('<b>Technologinė kortelė:</b> ID'+entry.asortimentas);
                    $('#date').html('<b>Sukurta/atnaujinta:</b> '+entry.data);
                    $('#desc').html('<b>Aprašymas:</b> '+entry.aprasymas);
                    $('#amount').html(-1 * entry.kiekis);
                    invoice = entry.saskaita;
                  }
                });
              
        });

      $('#view').click(function(e){
          if(invoice != 0 && invoice != '') invoice_open=window.open("/export/invoices/"+invoice,'','width=910,height=600')
      });

      $('#send').click(function(e){

        var answer = false;

        if(invoice != 0 && invoice != '')  answer = confirm("Ar tikrai norite išsiųsti sąskitą?")
        if (answer){
          $('#result').load('/export/invoices/'+invoice, function(result) {
            var content = $('#result').html();
            
                 $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/send/invoice",
            data: { 'invoice': invoice, 'content' : content
            },
            cache: false,
            beforeSend: function() {
              
            },
            success : function(data) { 
              msg = "Sąskaita išsiųsta.";
           $('.slide-out').html('<label class="slide-success">'+msg+'</label>');
           $('.slide-out').slideDown().delay(2000).slideUp('slow');
              }
              });
          });
        }
       
      });

      $('#done').click(function(e){

              $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/manage/amount",
            data: { 'uzsakymas': $('#uzsakymas').val() , 'kiekis' : $('#kiekis').val()
            },
            cache: false,
            beforeSend: function() {
              $('#done').addClass('loader');
            },
            success : function(data) { 
              $('#done').removeClass('loader');
                $('#kiekis').val('');

                $('#amount').html(-1 * data);
                $('#amount_'+$('#uzsakymas').val()).html(data+'.vnt');
                if(data <= 0) $('#status_'+$('#uzsakymas').val()).html('Užsakyta');

              }
              });

      });

    });