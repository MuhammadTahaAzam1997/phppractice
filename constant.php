<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>constant</title>

</head>
<body>
    
    <?php

    define(pi, 3.142);

    echo pi;

    function circlearea($r){
        $a=pi*$r*$r;
        return $a;
    }

    echo "Area of circle is".circlearea(2);
    ?>
</body>
</html>