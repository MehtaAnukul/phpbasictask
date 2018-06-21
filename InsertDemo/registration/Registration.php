<html>
<head>
<title>Registration_Form</title>
</head>
<body bgcolor="fffacd">
<h3 align="center"><u>Registration Form</u></h3>
<center>
<form action="addrecord.php" method="POST">
<table>

	<tr>
		<td>Name:</td>
		<td><input type="text" name="uname" placeholder="Pleace type your name.." title="Write your name over here."/></td>
	</tr>
	
	<tr>
		<td>Address:</td>
		<td><textarea name="textarea" rows="3" cols="20"  title="Give your address."></textarea></td>
	</tr>
	
	<tr>
		<td>Gender:</td>
		<td><input type="radio" name="gender" value="Male"/>Male</br>
			<input type="radio" name="gender" value="Female"/>Female</br>
		</td>
	</tr>
	
	<tr>
		<td>Birth Date:</td>
		<td><input type="date" name="udate"/></td>
	</tr>
	
	<tr>
		<td>Phone no:</td>
		<td><input type="text" class="textfield" value="" id="txtPhn" name="extra7" onkeypress="return validate(event)" placeholder="Enter phone no..." /></td>
	</tr>
	
	<tr>
		<td>E-mail:</td>
		<td><input type="email" name="uemail" required ></td>
	</tr>
	
	<tr>
		<td>Category:</td>
		<td>
			<select name="selectt">
				<option selected>Open</option>
				<option>SEBC</option>
				<option>Other</option>
			</select>	
		</td>
	</tr>
	
	<tr>
		<td>City:</td>
		<td>
			<select name="select">
				<option selected>Ahmedabad</option>
				<option>Baroda</option>
				<option>Surat</option>
			</select>	
		</td>
	</tr>
	
	<tr>
		<td>Hobbies:</td>
		<td>
			<input type="checkbox" name="hobbies[]" value="Reading"/>Reading</br>
			<input type="checkbox" name="hobbies[]" value="Singing"/>Singing</br>
			<input type="checkbox" name="hobbies[]" value="Playing"/>Playing</br>
		</td>
	</tr>
	
</table>

<p align="center">
	<input type="Submit" value="Submit" title="Click here to submit your data.">
	<input type="Reset" value="Reset Form" title="Click here to reset your form.">
</p>

</form>

</center>
<script type="text/javascript">
//Function to allow only numbers to textbox
function validate(key)
{
//getting key code of pressed key
var keycode = (key.which) ? key.which : key.keyCode;
var phn = document.getElementById('txtPhn');
//comparing pressed keycodes
if (!(keycode==8 || keycode==46)&&(keycode < 48 || keycode > 57))
{
return false;
}
else
{
//Condition to check textbox contains ten numbers or not
if (phn.value.length <10)
{
return true;
}
else
{
return false;
}
}
}
</script>
	

</body>
</html>