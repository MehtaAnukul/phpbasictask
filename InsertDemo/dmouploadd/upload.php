<?php
    
 if(isset($_REQUEST['sbmt']))
{ 
    
     $name=$_FILES['fname']['name'];
     if($name>5)
     {
         ?>
            <script type="application/javascript">
                alert("upload small image name ");
                </script>
            <?php
    }
    else
    {
                $type=$_FILES['fname']['type'];
                echo $type;
     
                if($type != "image/jpg" && $type != "image/png" && $type != "image/jpeg" && $type != "image/gif" )
                {
                    ?>
                        <script type="application/javascript">
        
                            alert( "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        
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
                                            alert("File Size is more than 2 MB so upload small size image");
                                    </script>
                                <?php
                        }
                        else
                        {
                                    $PATH="img/";

                                    $fileName=$_FILES['fname']['name'];
                                    $fileType=$_FILES['fname']['type'];
                                    $fileSize=$_FILES['fname']['size'];

                                    echo "<br/>file name:".$_FILES['fname']['name']."<br/>"; 
                                    echo "file size:".round($_FILES['fname']['size']/1024/1024,1)  .'MB'."<br/>"; 
                                    echo "file type:" .$_FILES['fname']['type']."<br/>";
                                    echo "temp file:".$_FILES['fname']['tmp_name']."<br/>";


                                    mysql_connect("localhost","root","");
                                    mysql_select_db("insert_db");

                                    $query="INSERT INTO `img`(`img_id`, `img_name`, `img_type`, `img_size`) VALUES ('','$fileName','$fileType','$fileSize')";

                                    if(mysql_query($query) or die(mysql_error()))
                                    {
                                                move_uploaded_file($_FILES['fname']['tmp_name'],$PATH.$_FILES['fname']['name']);       
                
                                                ?>
                
                                                    <script type="application/javascript">
                                                        alert("Image upload successfully");
                                                        window.location.href = "index.html";
                                                    </script>
                                                <?php     
                                    }
                                    else
                                    {
                                                ?>
                
                                                    <script type="application/javascript">
                                                          alert("Image not upload successfully");
//                                                        window.location.href = "index.html";
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
                alert("placess clicks the button");
                window.location.href = "index.html";
            </script>
            <?php  
 }
?>