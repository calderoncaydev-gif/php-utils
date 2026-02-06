<html>
<head>
<title>Calcular Suma (Total) de DataTables en Columna</title>
	<link rel="stylesheet"  href="vendor/datatables.min.css">	
	<link rel="stylesheet"  href="vendor/style.css">	
	<script src="vendor/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="vendor/datatables.min.js" type="text/javascript"></script> 	
</head>
<body>
	<table id="tbl-attendance" class="display nowrap" cellspacing="0" width="100%">
	<thead>
		<tr>
		<th>Curso</th>
		<th>Lunes</th>
		<th>Martes</th>
		<th>Miercoles</th>
		<th>Jueves</th>
		<th>Viernes</th>
		</tr>
	</thead>
	<tfoot align="right">
		<tr><th></th><th></th><th></th><th></th><th></th><th></th></tr>
	</tfoot>
	</table>
</body>
<script>
$(document).ready(function() {
    $('#tbl-attendance').dataTable({
    	"footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // computing column Total the complete result 
            var monTotal = api
                .column( 1 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
				
			 var tueTotal = api
                .column( 2 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
				
			 var wedTotal = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
				
			 var thuTotal = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
				
			 var friTotal = api
                .column( 5 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
			
				
            // Update footer by showing the total with the reference of the column index 
			$( api.column( 0 ).footer() ).html('Total');
            $( api.column( 1 ).footer() ).html(monTotal);
            $( api.column( 2 ).footer() ).html(tueTotal);
            $( api.column( 3 ).footer() ).html(wedTotal);
            $( api.column( 4 ).footer() ).html(thuTotal);
            $( api.column( 5 ).footer() ).html(friTotal);
        },
		"language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        "processing": true,
        "serverSide": true,
        "ajax": "server.php"
    } );
} );
</script>
</html>