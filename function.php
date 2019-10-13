<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>triangle area</title>
</head>
<body>
    
    <?php

    function triangle($l,$b){
        $area=($l*$b)/2;
        return $area;
    }
    echo "Area if triangle is: ".triangle(100,200);
    
    ?>
</body>
</html>