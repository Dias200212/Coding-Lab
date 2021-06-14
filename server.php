<?php
 $table = 'qalist';
$primaryKey = 'idQ';
$columns = array(
    array( 'db' => 'idQ', 'dt' => 0 ),
    array( 'db' => 'Question',  'dt' => 1 ),
    array( 'db' => 'Answer',   'dt' => 2 ),
    array( 'db' => 'Mark', 'dt' => 3 ),
);
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'dbexam',
    'host' => 'localhost'
);
require( 'vendor/DataTables/server-side/scripts/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>
