    var ForToDelete = 0;
 

$(document).ready(function() {

$('.table-assortment, .table-order').dataTable({

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


  
    var order_price = 0.00;
    var order_amount = 0;
    var order_pvm = 0.00;
    var order_pvm_price = 0.00;
    var pending = new Array();
    var aData = null;
    var bData = null;

$.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/user/suggest",
            data: { 
            },
            cache: false,
            beforeSend: function() {
            },
            success : function(data) { 
                 $( "#pavadinimas,.dataTables_filter label input" ).autocomplete({
                source: data
                });
              }
    });
  

   
  


  $('.table-assortment tbody').on('click',"tr",function (event) {  
              $('.table-order tbody tr').css("background-color",""); 
              $('.table-order tbody tr').css("color","");  
              $('.table-assortment tbody tr').css("background-color",""); 
              $('.table-assortment tbody tr').css("color","");  
              $('.table-order tbody tr td span').removeClass("delete-order-hover");

              $(this).css("background-color", "#00b551");

              aData = $('#DataTables_Table_0').dataTable({
              "bRetrieve": true,
              }).fnGetData(this);

            if (null != aData)  
            {
              console.log(aData);
            }

              $(this).attr('style', 'background-color:#00b551; color: #fff !important; ')
              $('#kiekis').val('');

            var card_id = $(this).attr('value');
            $('#add_card_to_order').val(card_id);

            $('.card-photo').attr('src','/cards/'+card_id+'.jpg?'+event.timeStamp);
    
            $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/assortment/info",
            data: { 'card_id': card_id ,
            },
            cache: false,
            beforeSend: function() {
            },
            success : function(data) { 
                  $('#state').html(data.busena);
                  $('#data').html(data.data);
                  $('#desc').html(data.desc);
                  $('#history').html(data.history);
              }
            });

    });


    $('.table-order tbody ').on('click','span',function(event) {

        var cl = $(this).attr('value');

        pending = jQuery.grep(pending, function( n, i ) {
        return ( n !== cl);
        });
   

        if($(".table-assortment tbody:contains('Nėra rezultatų')").length) $('.table-assortment tbody').html('');



        order_price = order_price.toFixed(2) - $('.table-order tbody #order_price_amount_'+cl).attr('price');
        order_amount = order_amount - $('.table-order tbody #order_price_amount_'+cl).attr('amount');

         order_pvm = order_price * 0.21;
         order_pvm_price = order_price + order_pvm;

        
         


    $('.table-order tbody #assort_'+$(this).attr('value')+' td').remove(':last');
    $('.table-order tbody #assort_'+$(this).attr('value')+' td').remove(':last');
    $('.table-order tbody #assort_'+$(this).attr('value')).prependTo( ".table-assortment tbody" );

    $('#sum_price').attr('value',order_price.toFixed(2));
    $('#sum_price').html(order_price.toFixed(2));

    $('#sum_pvm').attr('value',order_pvm.toFixed(2));
         $('#sum_pvm').html(order_pvm.toFixed(2));

         $('#sum_pvm_price').attr('value',order_pvm_price.toFixed(2));
         $('#sum_pvm_price').html(order_pvm_price.toFixed(2));

         $('#sum_amount').attr('value',order_amount);
         $('#sum_amount').html(order_amount);
    $('.table-assortment tbody tr .item_number').html(function(i){ return i+1 });
   
    msg = "Kortelė pašalinta";
    $('.slide-out').html('<label class="slide-success">'+msg+'</label>');
    $('.slide-out').slideDown().delay(2000).slideUp('slow'); 

    $('.table-assortment tbody tr').css("background-color",""); 
    $('.table-assortment tbody tr').css("color","");  

  });

  

  $('.table-order tbody').on('click',"tr",function (event) {  
              $('.table-order tbody tr').css("background-color",""); 
              $('.table-order tbody tr').css("color","");  
              $('.table-assortment tbody tr').css("background-color",""); 
              $('.table-assortment tbody tr').css("color",""); 
              $('.table-order tbody tr td span').removeClass("delete-order-hover");

              $(this).css("background-color", "#00b551");
              $('#delete_'+$(this).attr('value')).addClass("delete-order-hover");

              $(this).attr('style', 'background-color:#00b551; color: #fff !important; ')
              $('#kiekis').val('');


            var card_id = $(this).attr('value');
            ForToDelete = $(this).attr('value');

            $('.card-photo').attr('src','/cards/'+card_id+'.jpg?'+event.timeStamp);
    
            $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/assortment/info",
            data: { 'card_id': card_id ,
            },
            cache: false,
            beforeSend: function() {
            },
            success : function(data) { 
                  $('#state').html(data.busena);
                  $('#data').html(data.data);
                  $('#desc').html(data.desc);
                  $('#history').html(data.history);
              }
            });

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
              console.log(pending);
            },
            success : function(data) { 
  
                var new_table_content = '';
                $('#search').removeClass('loader');

                var number = 1;

                data.forEach(function(entry) {
                  if(jQuery.inArray(entry.id,pending) == -1)
                  {
                    new_table_content += '<tr id="assort_'+entry.id+'" value="'+entry.id+'" price="'+entry.kaina+'"> <td class="item_number">'+number+'</td><td>'+entry.id+'</td><td>'+entry.pavadinimas+'</td><td>'+entry.tipas+'</td><td>'+entry.kaina+'</td><td>'+entry.firma+'</td></tr>';
                    number++;
                  }
                });

                if(new_table_content == '') new_table_content = 'Nėra rezultatų';

                $('.table-assortment tbody').html(new_table_content);

              }
            });
  });

  function IsNumeric(num) {
     return (num >=0 || num < 0);
  } 


  $('#kiekis').change(function(e){

      if(($('#add_card_to_order').attr('value') != '' || $('#add_card_to_order').attr('value') != 0) && IsNumeric($('#kiekis').val()) && $('#kiekis').val() > 0)
      {

        pending.push($('#add_card_to_order').attr('value'));
        
        
         var price = $('#kiekis').val() * 1000.00 * $('.table-assortment tbody #assort_'+$('#add_card_to_order').attr('value')).attr('price');
         var amount = $('#kiekis').val() * 1000;
         order_price += price;
         order_amount += amount;


         order_pvm = order_price * 0.21;
         order_pvm_price = order_price + order_pvm;

         $('#sum_price').attr('value',order_price.toFixed(2));
         $('#sum_price').html(order_price.toFixed(2));

         $('#sum_pvm').attr('value',order_pvm.toFixed(2));
         $('#sum_pvm').html(order_pvm.toFixed(2));

         $('#sum_pvm_price').attr('value',order_pvm_price.toFixed(2));
         $('#sum_pvm_price').html(order_pvm_price.toFixed(2));

         $('#sum_amount').attr('value',order_amount);
         $('#sum_amount').html(order_amount);

         $('#kiekis').val('');
         //$('.table-assortment tbody #assort_'+$('#add_card_to_order').attr('value')).prependTo( ".table-order tbody" );


         //$('.table-order tbody #assort_'+$('#add_card_to_order').attr('value')).append('<td amount="'+amount+'" price="'+price.toFixed(2)+'" id="order_price_amount_'+$('#add_card_to_order').attr('value')+'">'+price.toFixed(2)+'</td><td id="delete_card_'+$('#add_card_to_order').attr('value')+'" value="'+$('#add_card_to_order').attr('value')+'"><span id="delete_'+$('#add_card_to_order').attr('value')+'" value="'+$('#add_card_to_order').attr('value')+'" class="delete-order"></span></td>');
         //$('.table-order tbody tr .item_number').html(function(i){ return i+1 });

         if (null != aData)  
        {

            $('#DataTables_Table_1').dataTable({
            "bRetrieve": true,
            }).fnAddData( [
            aData[0],
            aData[1],
            aData[2],
            aData[3],
            aData[4],
            aData[5],
            ".4",
            ".4",
            ".4",
            ] );

          }

         $('.table-order tbody tr').css("background-color",""); 
          $('.table-order tbody tr').css("color",""); 
          $('#add_card_to_order').val(''); 
         
           msg = "Kortelė pridėta";
           $('.slide-out').html('<label class="slide-success">'+msg+'</label>');
           $('.slide-out').slideDown().delay(2000).slideUp('slow'); 
      }
  });


  var result = new Object();

  $('#give_order').click(function(){

      $('.table-order tbody tr').each(function( index, element ) {
        var item = new Object();
        item.id = $(this).attr('value'); item.price = $('#order_price_amount_'+$(this).attr('value')).attr('price'); item.amount = $('#order_price_amount_'+$(this).attr('value')).attr('amount');
         result[index] = item;
      });

      if(jQuery.isEmptyObject(result))
      {
          msg = "Nėra pridėtų tech. kortelių";
           $('.slide-out').html('<label class="slide-error">'+msg+'</label>');
           $('.slide-out').slideDown().delay(2000).slideUp('slow');
      }
      else
      {
        $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/assortment/order",
            data: { 'user': $('#user').attr('value'), 'comment': $('#komentaras').val(), 'orders': JSON.stringify(result)
            },
            cache: false,
            beforeSend: function() {
             $('#give_order').addClass('loader');
            },
            success : function(data) { 
              $('#give_order').removeClass('loader');
              window.location.href= '/user/orders/success';
              }
            });
      }
  });



});

     $('#pavadinimas').keypress(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13') {
        $('#search').trigger( "click" );  
    }
});

     function goo()
     {
       $('#DataTables_Table_1').dataTable({
      
  
        "bRetrieve": true,
        
  }).fnAddData( [
        ".1",
        ".2",
        ".3",
        ".4",
        ".4",
        ".4",
        ".4",
        ".4",
        ".4",
     ] );
     }

  