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
            
                 echo $row_id=$_GET['id'];

               // echo $ro_name=$_GET['row_name'];
                
             $update_query="UPDATE `registration` SET `r_id`='',`r_name`=' $name',`r_address`='$addre',`r_gender`='$gen',`r_DOB`=' $dob',`r_phono_no`=' $phon',`r_email`='$email',`r_category`='$category',`r_city`='$city',`r_hobbies`='$hobb' WHERE `r_id`='$row_id'";
                
               if (mysql_query($update_query))
               {
                                    ?>
    <script type="application/javascript">
        alert("Update row successfully.");
        window.location.href = "Registration.php";
    </script>
    <?php
               }
?>