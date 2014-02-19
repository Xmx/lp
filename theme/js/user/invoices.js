$(document).ready(function() {

function get_invoices(param)
{

            $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/misc/invoices",
            data: { 'nr': $('#numeris').val(),'from': $('#from').val(), 'till': $('#till').val()
            },
            cache: false,
            beforeSend: function() {
              if(param == 1) $('#rasti').addClass('loader');
            },
            success : function(data) { 
              $('.table-invoices tbody').html('');

              if($('#rasti').hasClass('loader')) $('#rasti').removeClass('loader');

                var new_table_content = '';

                data.forEach(function(entry,index) {
                  new_table_content += '<tr id="" value="'+entry.id+'"><td>'+(index+1)+'</td><td>Sąskaita Nr.'+entry.nr+'</td><td>'+entry.data+'</td><td>'+entry.pabaiga+'</td><td>'+entry.kiekis+'</td><td>'+entry.kaina+'</td><td>'+entry.klientas+'</td><td>'+entry.komentaras+'</td></tr>';
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

$('#from, #till').on('change',function (event) {  
      get_invoices(0);
    });

$('#rasti').on('click',function (event) {  
      get_invoices(1);
    });

  $('.table-invoices tbody').on('click',"tr",function (event) {  
              $('.table-invoices tbody tr').css("background-color",""); 
              $('.table-invoices tbody tr').css("color","");  
   
              $(this).css("background-color", "#00b551");
              $(this).attr('style', 'background-color:#00b551; color: #fff !important; ')

  });

  $('.table-invoices tbody').on('dblclick',"tr",function (event) {  
        invoice=window.open("/export/invoices/"+$(this).attr('value'),'','width=910,height=600')
  });

});

$('#numeris').keypress(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13') {
        $('#rasti').trigger( "click" );  
    }
});