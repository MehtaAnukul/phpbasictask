<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>
    <?php
        $my=array(30,29,25,38,40);
        $min=40;
        
        foreach($my as $value)
        {
            if($min > $value)
            {
                $min = $value;
               
            }
            
             
        }
    echo "min no is:-->".$min;
?>

</body>
</html>