<!DOCTYPE html>
<head>
    <title>Question paper generator</title>
    <link href="style.css" rel="stylesheet" type="text/css" />

    <script src="vendor/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet"  href="vendor/DataTables/jquery.datatables.min.css">	
    <script src="vendor/DataTables/jquery.dataTables.min.js" type="text/javascript"></script> 

    <link rel="stylesheet"  href="vendor/DataTables/buttons.datatables.min.css">    
    <script src="vendor/DataTables/dataTables.buttons.min.js" type="text/javascript"></script> 
    <script src="vendor/DataTables/jszip.min.js" type="text/javascript"></script> 
    <script src="vendor/DataTables/pdfmake.min.js" type="text/javascript"></script> 
    <script src="vendor/DataTables/vfs_fonts.js" type="text/javascript"></script> 
    <script src="vendor/DataTables/buttons.html5.min.js" type="text/javascript"></script> 

<?php

$connect = new PDO("mysql:host=localhost;dbname=dbexam", "root", "");

$query = "SELECT * FROM tlist";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?>

 <script>
        $(document).ready(function () {
            var table = $('#qalist').DataTable({
                "paging": false,
                "processing": true,
                "serverSide": true,
                'serverMethod': 'post',
                "ajax": "server.php",
                dom: 'Bfrtip',
                buttons: [
                    {extend: 'copy', attr: {id: 'allan'}},'pdf'
                ]
            });

        });
    </script>
</head>
<body>
    <div class="container">
        <h2 align="center" >Question paper generator</h2>

        <table name="qalist" id="qalist" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Question</th>
                    <th>Answer</th>
					<th>Mark</th>
                </tr>
            </thead>
        </table>
    </div>
</body>
</html>