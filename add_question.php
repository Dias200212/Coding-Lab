<?php
if(count($_POST)>0) {
	require_once("db.php");
	$sql = "INSERT INTO qalist (idQ, Question, Answer,Mark,idT) VALUES ('" . $_POST["idQ"] . "','" . $_POST["Question"] . "','" . $_POST["Answer"] . "','" . $_POST["Mark"] . "','" . $_POST["idT"] . "')";

	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New Question Added Successfully";
	}
}
?>
<html>
<head>
<title>Add New Question</title>
<link rel="stylesheet" type="text/css" href="design.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div>
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="center" style="padding-bottom:5px;"><a href="list.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List of Questions</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New Question</td>
</tr>
<tr>
<td><label>idQ</label></td>
<td><input type="int" name="idQ" class="txtField"></td>
</tr>
<tr>
<td><label>Question</label></td>
<td><textarea type="text" name="Question"></textarea></td>
</tr>
<td><label>Answer</label></td>
<td><textarea type="text" name="Answer"></textarea></td>
</tr>
<td><label>Mark</label></td>
<td><input type="int" name="Mark" class="txtField"></td>
</tr>
<td><label>idT</label></td>
<td data-type="int" data-decimals="11">
<span class="default_value hide"></span>
<input type="hidden" name="idT" value="foreign"><select name="idT" onchange="return verificationsAfterFieldChange('ef4af311a964c08659d6fcf6b642718e', '0','int(11)')" class="textfield" tabindex="5" id="field_5_3"><option value="1">1&nbsp;-&nbsp;Computer systems</option><option value="2">2&nbsp;-&nbsp;Software</option><option value="3">3&nbsp;-&nbsp;Information systems</option><option value="4">4&nbsp;-&nbsp;Network</option></select></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>