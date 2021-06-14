<?php
require_once("db.php");
$sql = "SELECT * FROM qalist";
$result = mysqli_query($conn,$sql);
?>
<html>
<head>
<title>List os questions</title>
<link rel="stylesheet" type="text/css" href="design.css" />

</head>
<body>
<style>
 body {
    
    background: url("images/kosmonavt_kacheli_buket_154206_3840x2160.jpg") no-repeat center;
    height: 100vh;
    color: #fff;
    min-height: 500px;
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Ubuntu', sans-serif;
font-family:Arial;
	
   }
   h4 {
	   color:#FFFFFF;
   }
 </style>
<form name="frmUser" method="post" action="">
<div style="width:1000px;margin:auto;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="1" cellpadding="10" cellspacing="1" class="tblListForm1">
<tr class="listheader">
<td><label>idT</label></td>
<td><label>Topic Name</label></td>
</tr>
<tr class="list">
<td><h4>1<h4></td>
<td><h4>Computer systems<h4></td>
</tr>
<tr class="list">
<td><h4>2<h4></td>
<td><h4>Software<h4></td>
</tr>
<tr class="list">
<td><h4>3<h4></td>
<td><h4>Information systems<h4></td>
</tr>
<tr class="list">
<td><h4>4<h4></td>
<td><h4>Network<h4></td>
</tr>
</table>
<div align="right" style="padding-bottom:5px;"><a href="welcome.php" class="link">Cancel</a></div>
<div align="right" style="padding-bottom:5px;"><a href="add_question.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='25px' height='25px'/></a></div>
<table border="0" cellpadding="10" cellspacing="1" width="1000"  class="tblListForm">
<tr class="listheader">
<td>idQ</td>
<td>Question</td>
<td>Answer</td>
<td>Mark</td>
<td>idT</td>
<td>Change or delete</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["idQ"]; ?></td>
<td><?php echo $row["Question"]; ?></td>
<td><?php echo $row["Answer"]; ?></td>
<td><?php echo $row["Mark"]; ?></td>
<td><?php echo $row["idT"]; ?></td>
<td><a href="edit.php?idQ=<?php echo $row["idQ"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a>  <a href="delete.php?idQ=<?php echo $row["idQ"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td>
</tr>
<?php
$i++;
}
?>
</table>
</form>
</div>
</body></html>