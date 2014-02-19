function card_image_error()
  {
  $('.card-img').attr('src','/theme/img/admin/misc/not_available.JPG');
  $('.card-href').removeAttr('href');
  $('.card-img').addClass('zoom');
    }

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

    var prices = new Array();
    var made = null;
    var aData = null;
    var bData = null;




    var accentMap = {
      "ą": "a",
      "č": "c",
      "ę" : "e",
      "ė" : "e",
      "į" : "i",
      "š" : "s",
      "ų" : "u",
      "ū" : "u",
      "ž" : "z"
    };

     var normalize = function( term ) {
      var ret = "";
      for ( var i = 0; i < term.length; i++ ) {
        ret += accentMap[ term.charAt(i) ] || term.charAt(i);
      }
      return ret;
      };

$.ajax({
            type: 'post',                   
            dataType:'json', 
       url: "/ajax/assortment/search",
            data: { 'pavadinimas': '' , 'vartotojas': $('#user').val()
            },
            cache: false,
            beforeSend: function() {
            },
            success : function(data) { 

                data.forEach(function(entry) {
                  var kaina = parseFloat(entry.kaina);
                  prices[entry.id.toString()] = kaina.toFixed(2);
                });
                console.log(prices);
              }

            });

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


                 $( "#pavadinimas" ).autocomplete({
                source: function( request, response ) {
                var matcher = new RegExp( $.ui.autocomplete.escapeRegex( request.term ), "i" );
                response( $.grep( data, function( value ) {
                value = value.label || value.value || value;
                return matcher.test( value ) || matcher.test( normalize( value ) );
              }) );
      }
    });
              }
    });
  

function made_order()
  {
    made = $('#DataTables_Table_1').dataTable({
              "bRetrieve": true,
              }).fnGetData();

    var sum_amount = parseFloat(0);
    var sum_price = parseFloat(0.00);
    var sum_pvm = parseFloat(0.00);
    var sum_pvm_price = parseFloat(0.00);

    made.forEach(function(entry) {
    sum_amount += parseFloat(entry[5]) + parseFloat(entry[6]);
    sum_price += parseFloat(entry[7]);

    });

    sum_pvm = sum_price * 0.21; 
    sum_pvm_price = sum_price + sum_pvm;

      $('#sum_amount').html(parseInt(sum_amount*1000));
      $('#sum_price').html(sum_price.toFixed(2));
      $('#sum_pvm').html(sum_pvm.toFixed(2));
      $('#sum_pvm_price').html(sum_pvm_price.toFixed(2));
    
  }

  


  $('.table-assortment tbody').on('click',"tr",function (event) {  
              $('.table-order tbody tr').removeClass("selected");
              $('.table-assortment tbody tr').removeClass("selected");
              $('.table-order tbody tr td span').removeClass("delete-order-hover");

              $(this).addClass("selected");

              aData = $('#DataTables_Table_0').dataTable({
              "bRetrieve": true,
              }).fnGetData(this);

            if (null != aData)  
            {
                $.ajax({
                type: 'post',
                dataType:'json',
                url: "/ajax/assortment/info",
                data: { 'card_id': aData[0] ,
                },
                cache: false,
                beforeSend: function() {
                },
                success : function(data) {
                  var timestmp = new Date().getTime();
                  $('.numberCircle').html(data.padetis_rulone);

                  $('.card-img').attr('src','/cards/'+data.id+'.jpg?'+timestmp);
                  $('.card-href').attr('href','/cards/'+data.id+'.jpg?'+timestmp);
                  $('.card-img').addClass('zoom');

                  $('.table-info tbody').html('');

                  $.each(data, function(key, value) {
                  $('.table-info tbody').append('<tr><td>'+key+'</td><td>'+value+'</td></tr>');
}                 );

                }
                });
            }

          


    });

$('.table-orders tbody').on('click',"tr",function (event) {  
              

              bData = $('#DataTables_Table_1').dataTable({
              "bRetrieve": true,
              }).fnGetData(this);

            if (null != bData)  
            {
                $.ajax({
                type: 'post',
                dataType:'json',
                url: "/ajax/assortment/info",
                data: { 'card_id': bData[0] ,
                },
                cache: false,
                beforeSend: function() {
                },
                success : function(data) {
                  var timestmp = new Date().getTime();
                  $('.numberCircle').html(data.padetis_rulone);
                  $('.card-img').attr('src','/cards/'+data.id+'.jpg?'+timestmp);
                  
                  $('.table-info tbody').html('');

                  $.each(data, function(key, value) {
                  $('.table-info tbody').append('<tr><td>'+key+'</td><td>'+value+'</td></tr>');
}                 );

                }
                });
            }

          


    });


  $(document).on('click','.prideti',function(event) {

      var selected = '';
      if (null != aData)  selected = aData[0];
      var atvezti = 0; 
      var i_sandeli = 0;
      
      if($('#atvezti_'+selected).val() != '') atvezti = $('#atvezti_'+selected).val();
      if($('#i_sandeli_'+selected).val() != '') i_sandeli = $('#i_sandeli_'+selected).val();
      

      if((atvezti > 0 && i_sandeli >= 0) || (atvezti >= 0 && i_sandeli > 0))
      {
      
        if (null != aData)  
        {

            var sum_price_am = (parseFloat(atvezti)+parseFloat(i_sandeli))*1000*prices[aData[0].toString()];
            console.log(sum_price_am.toFixed(2));
            $('#DataTables_Table_1').dataTable({
            "bRetrieve": true,
            }).fnAddData( [
            aData[0],
            aData[1],
            aData[2],
            aData[3],
            aData[4],
            atvezti,
            i_sandeli,
            sum_price_am.toFixed(2),
            '<span class="delete-order" value="'+aData[0]+'"></span>'
          
            ] );

            made_order();

          }

          msg = "Užsakymas papildytas";
           
		   $().toastmessage('showSuccessToast', msg);

        $('#atvezti_'+selected).val('');
        $('#i_sandeli_'+selected).val('');
      }
	  else
	  {
			msg = "Neteisingai nurodytas kiekis";
		   $().toastmessage('showErrorToast', msg);
	  }

  });


  $(document).on('click','.delete-order',function (event) {

    aData = $('#DataTables_Table_1').dataTable({
              "bRetrieve": true,
              }).fnDeleteRow(this.parentNode.parentNode);

    made_order();

  });

  $('.table-order tbody').on('click',"tr",function (event) {  
              $('.table-order tbody tr').removeClass("selected");
              $('.table-assortment tbody tr').removeClass("selected");

              $('.table-order tbody tr td span').removeClass("delete-order-hover");

              $(this).addClass("selected");
              $('.table-order tbody .selected td span').addClass("delete-order-hover");

              
              $('#kiekis').val('');


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
             $(".numberCircle").html('');
              $('#search').addClass('loader');
              $('#kiekis').val('');
              $('#DataTables_Table_0').dataTable({
              "bRetrieve": true,
              }).fnClearTable();
            },
            success : function(data) { 
          
              
            data.forEach(function(entry) {
              
                $('#DataTables_Table_0').dataTable({ "bRetrieve": true }).fnAddData( [entry.id,entry.data,entry.pavadinimas,entry.medziaga,entry.dydis,'<input type="number" id="atvezti_'+entry.id+'" name="atvezti" value="">','<input type="number" id="i_sandeli_'+entry.id+'" name="i_sandeli" value="">','<button name="prideti" class="prideti">Pridėti</button>'
            ] );
            });

            
            $('#search').removeClass('loader');
              }
            });
  });








});

     $('#pavadinimas').keypress(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13') {
        $('#search').trigger( "click" );  
    }
});

 

  