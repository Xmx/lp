$(document).ready(function() {
	$('.table-insp').dataTable({

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
  
  
		
	window.setInterval(function()
	{
        $.ajax({
            type: 'post',                   
            dataType:'json',   
              url: "/test/manage/refresh",
            data: {
            },
            cache: false,
            beforeSend: function() {
             $('.loading').show();
              $('#DataTables_Table_0').dataTable({
              "bRetrieve": true,
              }).fnClearTable();
            },
            success : function(data) { 
			var nr = 1;
            data.forEach(function(entry) {
                $('#DataTables_Table_0').dataTable({ "bRetrieve": true }).fnAddData( [nr,entry.object,entry.date,entry._1,entry._2,entry._3,entry._4,entry._5,entry.status
            ] );
			nr++;
            });
			 $('.loading').delay(2000).hide();
              }
            });
	},30000);
});