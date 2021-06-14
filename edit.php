<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE qalist set Question='" . $_POST["Question"] . "', Answer='" . $_POST["Answer"] . "', Mark='" . $_POST["Mark"] . "', idT='" . $_POST["idT"] . "' WHERE idQ='" . $_POST["idQ"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM qalist WHERE idQ='" . $_GET["idQ"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Edit</title>
<link rel="stylesheet" type="text/css" href="design.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div>
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="center" style="padding-bottom:5px;"><a href="list.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List of Questions</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit Questions</td>
</tr>
<tr>
<td><label>Question</label></td>
<td><input type="hidden" name="idQ" class="txtField" value="<?php echo $row['idQ']; ?>"><textarea type="string" name="Question"><?php echo $row['Question']; ?></textarea></td>
</tr>
<tr>
<td><label>Answer</label></td>
<td><textarea type="string" name="Answer"><?php echo $row['Answer']; ?></textarea></td>
</tr>
<td><label>Mark</label></td>
<td><input type="number_format" name="Mark" class="txtField" value="<?php echo $row['Mark']; ?>"></td>
</tr>
<td><label>idT</label></td>
<td><input type="hidden" name="idT" value="foreign"><select name="idT" onchange="return verificationsAfterFieldChange('ef4af311a964c08659d6fcf6b642718e', '0','int(11)')" class="textfield" tabindex="5" id="field_5_3"><option value="1">1&nbsp;-&nbsp;Computer systems</option><option value="2">2&nbsp;-&nbsp;Software</option><option value="3">3&nbsp;-&nbsp;Information systems</option><option value="4">4&nbsp;-&nbsp;Network</option></select></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>