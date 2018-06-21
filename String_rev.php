<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>String_rev</title>
</head>

<body>
    <?php 
        
        $a="abc";  
        $i=0;
        while($a[$i]!=NULL)
        {
            $i++;            
        }
    echo "counter:" . $i . "<br/>";
    
    $data="";
    
    $j=0;
    
        for($j=$i;$j>=0;$j--)
        {
            echo $a[$j];
            
        }
    
    $string = "Mimoh";

$i =0;

while(($string[$i])!=null){

        $i++;

}

$i--;

while(($string[$i])!=null){

        echo $string[$i];

$i--;

}
   
        
        
    ?>


</body>

</html>