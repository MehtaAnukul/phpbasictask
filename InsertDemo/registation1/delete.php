<?php
              $conn=mysql_connect("localhost","root","");
        
	             mysql_select_db("insert_db",$conn);
            
                 echo $row_id=$_GET['id'];

                echo $row_name=$_GET['row_name'];
                
                $delete_query="DELETE FROM `registration` WHERE `r_id`='$row_id'";
            
                
               if (mysql_query($delete_query))
               {
                                    ?>
<script type="application/javascript">
    alert("Deleted row successfully.");
    window.location.href = "Registration.php";
</script>
    <?php
               }
?>




        >