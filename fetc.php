<?php

//fetc.php

$connect = new PDO("mysql:host=localhost;dbname=dbexam", "root", "");

if($_POST["query"] != '')
{
 $search_array = explode(",", $_POST["query"]);
 $search_text = "'" . implode("', '", $search_array) . "'";
 $query = "
 SELECT * FROM qalist 
 WHERE idT IN (".$search_text.") 
 ORDER BY idQ 
 ";
}
else
{
 $query = "SELECT * FROM qalist ORDER BY idQ ";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
{
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["idQ"].'</td>
   <td>'.$row["Question"].'</td>
   <td>'.$row["Answer"].'</td>
   <td>'.$row["Mark"].'</td>
  </tr>
  ';
 }
}
else
{
 $output .= '
 <tr>
  <td colspan="5" align="center">No Data Found</td>
 </tr>
 ';
}

echo $output;

if(isset($_POST["generate_pdf"]))
{
  require_once('tcpdf/tcpdf.php');
  $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
  $obj_pdf->SetCreator(PDF_CREATOR);
  $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF in PHP");
  $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
  $obj_pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  $obj_pdf->SetHeaderFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
  $obl_pdf->SetDefaultMonospacedFont('helveca');
  $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
  $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
  $obj_pdf->SetPrintHeader(false);
  $obj_pdf->SetPrintFooter(false);
  $obj_pdf->SetAutoPageBreak(TRUE, 10);
  $obj_pdf->SetFont('helvetica', '', 11);
  $obj_pdf->Addpage();
  $connect='';
    $connect .= ' <h4 aligns="center">Question Paper Generater</h4><br />
  <table border="1"> 
    <tr>
    <th width="5%">#</th>
    <th width="30%">Question</th>
    <th width="30%">Answer</th>
    <th width="5%">Mark</th>
    </tr>
    ';
  $connect .= fetch_data();
  $connect .= '</table>';
  $obj_pdf->writeHTML($connect);
  $obj_pdf->Output('file.pdf', 'I');
}
?>