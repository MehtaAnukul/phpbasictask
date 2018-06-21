<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>
    <?php
        $my=array(30,29,25,38,40,80,10101,222222222222);
        $max=0;
        
        foreach($my as $value)
        {
            if($max < $value)
            {
                $max = $value;
               
            }
            
             
        }
    echo "max no is:-->".$max;
?>

</body>
</html>