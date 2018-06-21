<?php

	$con=mysql_connect("localhost","root","") or die(mysql_error());
    
    
    mysql_select_db("insert_db",$con);


     echo $img_id=$_GET['id'];
     echo $img_data=$_GET['data'];  // image name


    $query_delete="DELETE FROM `imgrecord` WHERE `img_id`='$img_id'";

    
        if(mysql_query($query_delete))  
        {
            
            $file = "upload/".$img_data ; // upload/car.jpg
			if (unlink($file)) //upload/car.jpg
			{
				?>

				<script type="application/javascript">
					alert("Image Data Successfullt Deleted");
					window.location.href = "index.php";
				</script>


				<?php
			}
		}    


?>