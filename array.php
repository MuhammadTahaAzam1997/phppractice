<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array</title>
</head>
<body>
    <?php
    $num=array(2,4,6,8,9,7,5,3,2,1,0);
    
    $length=count($num);
    sort($num);
    for($i=0; $i<$length;$i++){
        echo "<br>"."index ".$i." is ".$num[$i];
    }
    ?>
</body>
</html>