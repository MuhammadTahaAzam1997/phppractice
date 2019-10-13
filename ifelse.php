<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>conditions in php</title>
</head>
<body>
    <?php
    
    $t=date("H");
    if($t<20){
        echo $t."this is best time";
    }
    else{
        echo "this is not a best time";
    }

    echo date_default_timezone_get();
     


    if ($t == $t){
        echo "Taha azam is doing php programming";
    }
    ?>
</body>
</html>