 <?php
	$name=$_POST['uname'];
	$addre=$_POST['textarea'];
	$gen=$_POST['gender'];
	$dob=$_POST['udate'];
	$phon=$_POST['extra7'];
	$email=$_POST['uemail'];
	$category=$_POST['selectt'];
	$city=$_POST['select'];
	for($i=0; $i<count($_POST['hobbies']); $i++)
	{
		$_POST['hobbies'][$i]=$_POST['hobbies'][$i];
		$hobb=$_POST['hobbies'][$i];
	}
	
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("insert_db",$conn);
	$sql="INSERT INTO `registration`(`r_id`, `r_name`, `r_address`, `r_gender`, `r_DOB`, `r_phono_no`, `r_email`, `r_category`, `r_city`, `r_hobbies`) VALUES ('','$name','$addre','$gen','$dob','$phon','$email','$category','$city','$hobb')";
	mysql_query($sql,$conn);
	?>
    <script type="application/javascript">
        {
            alert("Record insert successfully");
            window.location.href = "Registration.php";
        }
    </script>
    <?php
?>