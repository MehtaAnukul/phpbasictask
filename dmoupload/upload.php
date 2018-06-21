<?php
    
    if(isset($_REQUEST['sbmt']))
    {
        $PATH="img/";
        
        echo "file name:".$_FILES['fname']['name']."<br/>";
        echo "file size:".round($_FILES['fname']['size']/1024/1024,1)  .'MB'."<br/>"; 
        echo "file type:" .$_FILES['fname']['type']."<br/>";
        echo "temp file:".$_FILES['fname']['tmp_name']."<br/>";
            
            
        move_uploaded_file($_FILES['fname']['tmp_name'],$PATH.$_FILES['fname']['name']);
    }
	else
	{
    ?>
    <script type="application/javascript">
        
        alert("placess clicks the button");
        window.location.href="index.html";
        
    </script>    
  <?php  
	}




?>