$(document).ready(function() {

  $('.table-pending, .table-done').dataTable({

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



  $('#search').click(function(e) {
        $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/assortment/search",
            data: { 'pavadinimas': $('#pavadinimas').val() , 'vartotojas': $('#user').val()
            },
            cache: false,
            beforeSend: function() {
              $('.table-assortment tbody').html('');
              $('#search').addClass('loader');
              $('#kiekis').val('');
            },
            success : function(data) { 
  
                var new_table_content = '';
                $('#search').removeClass('loader');

                var number = 1;

                data.forEach(function(entry) {
                  new_table_content += '<tr id="assort_'+entry.id+'" value="'+entry.id+'" price="'+entry.kaina+'"> <td>'+number+'</td><td>'+entry.id+'</td><td>'+entry.pavadinimas+'</td><td>'+entry.tipas+'</td><td>'+entry.kaina+'</td><td>'+entry.firma+'</td></tr>';
                  number++;
                });

                if(new_table_content == '') new_table_content = 'Nėra rezultatų';

                $('.table-assortment tbody').html(new_table_content);

              }
            });
  });

$('.table-assortment tbody').on('click',"tr",function (event) {  
              $('.table-order tbody tr').css("background-color",""); 
              $('.table-order tbody tr').css("color","");  
              $('.table-assortment tbody tr').css("background-color",""); 
              $('.table-assortment tbody tr').css("color","");  
              $('.table-order tbody tr .delete_order span').removeClass("delete-order-hover");

              $(this).css("background-color", "#00b551");

              $(this).attr('style', 'background-color:#00b551; color: #fff !important; ')
              

              var card = $(this).attr('value');

              
              
            $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/assortment/unfinished_orders",
            data: { 'card': card, 'user': $('#user').attr('value'),
            },
            cache: false,
            beforeSend: function() {
            },
            success : function(data) { 

                  var number = 1;

                  $('.table-order tbody').html('');

                  data.forEach(function(entry) {
                  
                  $('.table-order tbody').append('<tr value="'+entry.id+'" id="'+entry.id+'"><td>'+number+'</td><td>'+entry.asortimentas+'</td><td>'+entry.pavadinimas+'</td><td>'+entry.tipas+'</td><td>'+entry.medziaga+'</td><td>'+entry.dydis+'</td><td>'+entry.spauda+'</td><td>'+entry.folija+'</td><td>'+entry.lakas+'</td><td>'+entry.klijai+'</td><td>'+entry.atvezti+'</td><td>'+entry.i_sandeli+'</td><td>'+entry.komentaras+'</td></tr>')
                  number++;
                });
                  $('.table-scroll').jScrollPane();
              }
            });

    });

  $('#export').click(function(){ 

      var result = new Object();

      $('.table-order tbody tr').each(function( index, element ) {
        result[index] = $(this).attr('value');
        
      });

      if(jQuery.isEmptyObject(result))
      {
          msg = "Nėra pasirinkta tech. kortelė arba nėra sukurtų užsakymų.";
           $('.slide-out').html('<label class="slide-error">'+msg+'</label>');
           $('.slide-out').slideDown().delay(2000).slideUp('slow');
      }
      else
      {
      
      
            $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/export/cache",
            data: { 'order': JSON.stringify(result)
            },
            cache: false,
            beforeSend: function() {
              $('#export').addClass('loader');
            },
            success : function(data) { 
                  $('#export').removeClass('loader');
                  order =window.open("/export/orders/"+data,'','width=910,height=600')
              }
            });
        }

   });

});