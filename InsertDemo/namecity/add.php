<?php
	$name=$_POST['uname'];
	$city=$_POST['ctxt'];
	
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("insert_db",$conn);
	$sql="INSERT INTO `insert_record`(`Name`, `City`) VALUES ('$name','$city')";
	mysql_query($sql,$conn);
	?>
	<script type="application/javascript">
	{
		alert("Record insert successfully");
	}
	</script>
	 <?php
	
?>	