<!DOCTYPE html>
<html>
 <head>
<title>Convertir Tabla HTML a archivo CSV</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <center>
        <h1 style="color:green">BaulPHP</h1>
        <h2>Convertir Tabla HTML a archivo CSV</h2>
        <table style="width:60%" class="table table-hover">
            <tr class="table-info">
                <th>Nombre</th>
                <th>Edad</th>
                <th>Celular</th>
                <th>Zona</th>
            </tr>
            <tr>
                <td>Maria</td>
                <td>19</td>
                <td>987654543</td>
                <td>Quito</td>
            </tr>
            <tr>
                <td>Carlos</td>
                <td>22</td>
                <td>999987654</td>
                <td>Lima</td>
            </tr>
            <tr>
              <td>Leydi</td>
              <td>21</td>
              <td>989890098</td>
              <td>Montevideo</td>
            </tr>
            <tr>
                <td>Leonel</td>
                <td>25</td>
                <td>987645654</td>
                <td>Santiago</td>
            </tr>
        </table>
        <br><br>
        <button class="btn btn-primary" type="button" onclick="table_CSV()">
            Descargar archivo CSV
      </button>
    </center>
 
    <script type="text/javascript">
        function table_CSV() {
 
            var csv_data = [];
 
            var rows = document.getElementsByTagName('tr');
            for (var i = 0; i < rows.length; i++) {
 
                var cols = rows[i].querySelectorAll('td,th');
 
                var csvrow = [];
                for (var j = 0; j < cols.length; j++) {
 
                    csvrow.push(cols[j].innerHTML);
                }
 
                csv_data.push(csvrow.join(","));
            }
 
            csv_data = csv_data.join('\n');
 
            descargaCSV(csv_data);
 
        }
 
        function descargaCSV(csv_data) {

            CSVFile = new Blob([csv_data], {
                type: "text/csv"
            });
 
            var temp_link = document.createElement('a');
 
            temp_link.download = "baulphp.csv";
            var url = window.URL.createObjectURL(CSVFile);
            temp_link.href = url;
 
            temp_link.style.display = "none";
            document.body.appendChild(temp_link);
 
            temp_link.click();
            document.body.removeChild(temp_link);
        }
    </script>
</body>
 
</html>
