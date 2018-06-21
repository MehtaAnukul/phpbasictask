<?php
	$conn=mysql_connect("localhost","root","");
		
	mysql_select_db("insert_db");
	
	echo $img_id=$_GET['id'];
	echo $img_data=$_GET['image_name'];
	
	 $query_delete="DELETE FROM `imgrecord` WHERE `img_id`='$img_id'";
	 
	  if(mysql_query($query_delete))  
        {
            
            $file = "img/".$img_data ; // img/car.jpg
			if (unlink($file)) //img/car.jpg
			{
				?>

				<script type="application/javascript">
					alert("Image Data Successfullt Deleted");
					window.location.href="index.php";
				</script>


				<?php
			}
		} 
?>		

