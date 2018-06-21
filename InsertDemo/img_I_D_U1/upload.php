<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>upload</title>
</head>

<body>


 <?php
	
	if(isset($_REQUEST['sbmt']))
	{
		$name=$_FILES['fname']['name'];
		if($name>5)
		{
			?>
				<script type="application/javascript">
					alert("upload small size img name");
					window.location.href="index.php";
				</script>
			<?php
		}
		else
		{
			$type=$_FILES['fname']['type'];
			echo $type;
			if($type != "image/jpg" && $type != "image/png" && $type != "image/jpeg" && $type != "image/gif")
			{
				?>
					<script type="application/javascript">
						alert("Sorry,only JPG,PNG,JPEG or GIF file are allowed.");
						window.location.href="index.php";
					</script>
				<?php
			}
			else
			{
				$size=$_FILES['fname']['size'];
				echo $size;
				if($size>2097152)
				{
					?>
						<script type="application/javascript">
							alert("file size more then 2MB..So upload small size image.");
							window.location.href="index.php";
						</script>
					<?php
				}
				else
				{
			
					$PATH="img/";
 
					$fileName=$_FILES['fname']['name'];
					$filetype=$_FILES['fname']['type'];
					$filesize=$_FILES['fname']['size'];
				
					$conn=mysql_connect("localhost","root","");
		
					mysql_select_db("insert_db");
       
					$insert_query="INSERT INTO `imgrecord`(`img_id`, `img_name`, `img_type`, `img_size`) VALUES ('',
								'$fileName','$filetype','$filesize')";
					
					if(mysql_query($insert_query))
					{
						move_uploaded_file($_FILES['fname']['tmp_name'],$PATH.$_FILES['fname']['name']);
						
							?>
								<script type="application/javascript">
									alert("img upload successfully");
									window.location.href = "index.php";
								</script>
							<?php
            
						
					}
					else
					{
						?>
							<script type="application/javascript">
								alert("img not upload successfully");
							</script>
						<?php
					}
				}
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
</body>

</html>