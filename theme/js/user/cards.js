$(document).ready(function() {


  $('#search_name').click(function(e) {
        $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/ajax/assortment/search",
            data: { 'pavadinimas': $('#name').val() , 'vartotojas': $('#user').val()
            },
            cache: false,
            beforeSend: function() {
              $('.table-assort tbody').html('');
              $('#search_name').addClass('loader');
            },
            success : function(data) { 
  
                var new_table_content = '';
                $('#search_name').removeClass('loader');

                var number = 1;

                data.forEach(function(entry) {
                  new_table_content += '<tr value="'+entry.id+'"> <td>'+entry.pavadinimas+'</td><td></td><td></td>';
                  number++;
                });

                if(new_table_content == '') new_table_content = 'Nėra rezultatų';

                $('.table-assort tbody').html(new_table_content);

              }
            });
  });

$('.table-assort tbody').on('click',"tr",function (event) {  
              $('.table-order tbody tr').css("background-color",""); 
              $('.table-order tbody tr').css("color","");  
              $('.table-assort tbody tr').css("background-color",""); 
              $('.table-assort tbody tr').css("color","");  
              

              $(this).css("background-color", "#00b551");

              $(this).attr('style', 'background-color:#00b551; color: #fff !important; ')
              

              var card = $(this).attr('value');

            $('#card-photo').attr('src','/cards/'+card+'.jpg?'+event.timeStamp);
            $('#card_id').html('ID'+card);

    });

});