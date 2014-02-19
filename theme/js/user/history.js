$(document).ready(function() {


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

$('#from, #till, #order').on('change',function (event) {  
              
            
            $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/misc/done_orders",
            data: { 'from': $('#from').val(), 'till': $('#till').val() , 'order': $('#order').val()
            },
            cache: false,
            beforeSend: function() {
              console.log($('#order').val());
            },
            success : function(data) { 
                  
                  var number = 1;

                  $('.table-order tbody').html('');

                  data.forEach(function(entry) {
                  $('.table-order tbody').append('<tr id="'+entry.asortimentas+'"><td>'+number+'</td><td>'+entry.asortimentas+'</td><td>'+entry.pavadinimas+'</td><td>'+entry.tipas+'</td><td>'+entry.medziaga+'</td><td>'+entry.dydis+'</td><td>'+entry.spauda+'</td><td>'+entry.folija+'</td><td>'+entry.lakas+'</td><td>'+entry.klijai+'</td><td>'+entry.atvezti+'</td><td>'+entry.i_sandeli+'</td><td>'+entry.komentaras+'</td></tr>')
                  number++;
                });

                  $('.table-scroll').jScrollPane();
              }
            });

    });

});