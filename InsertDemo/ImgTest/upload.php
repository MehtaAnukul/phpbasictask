<?php



if(isset($_REQUEST['sbmt']))
{
    $PATH="upload/";
    
    $filename=$_FILES['imgfile']['name'];
    $filetype=$_FILES['imgfile']['type'];
    $filesize=$_FILES['imgfile']['size'];
    
    // server,username,user_pwd,ip,securty;
    
    $con=mysql_connect("localhost","root","") or die(mysql_error());
  
    mysql_select_db("insert_db",$con);
   
    $insert_query="INSERT INTO `imgrecord`(`img_id`, `img_name`, `img_type`, `img_size`) VALUES ('','$filename','$filetype','$filesize')";

    if(mysql_query($insert_query))
    {
    
        if(move_uploaded_file($_FILES['imgfile']['tmp_name'],$PATH.$_FILES['imgfile']['name']))  
        {
            ?>

			<script type="application/javascript">
				alert("Image Data Successfullt stored");
				window.location.href = "index.php";
			</script>


			<?php
		}    
    }
        
    
}
else
{
        ?>

        <script type="application/javascript">
            window.location.href = "index.php";
        </script>


        <?php
}


?>