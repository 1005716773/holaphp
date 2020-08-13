<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola PHP</title>
</head>
<body>
    
<?php
    //phpinfo();
    echo "hola", "mundo" , "PHP", 7;
    print 'hola mundo';
    print 'hola mundo' . 'php';
    echo '<p> Hola mundo </p>';
    echo '<p> esto es PHP';
    print '<h1> Hola SENA </h1>';

    echo '<br><br>';
    echo "=====================================<br>";
    echo 'Operadores aritmetricos <br>';
    echo "=====================================<br>";
    echo '<br><br>';

    $nombre = 'Santiago Ballen';
    $x = 8;
    $y = 4;
   

    $z = $x + $y;
    echo $x . '+' . $y . '=' . $z . 'br';
    $z = $x - $y;
    echo $x . '-' . $y . '=' . $z . 'br';
    $z = $x * $y;
    echo $x . '*' . $y . '=' . $z . 'br';
    $z = $x / $y;
    echo $x . '/' . $y . '=' . $z . 'br';
    $z = $x % $y;
    echo $x . '%' . $y . '=' . $z . 'br';
    
    echo $x++;
    echo '<br>';
    echo $x;
    echo '<br>';
    echo $x--;
    echo '<br>';
    echo $x;
    echo '<br>';
    echo ++$x;

    echo '<br><br>';
    echo "=====================================<br>";
    echo 'Operadores Relacionales <br>';
    echo "=====================================<br>";
    echo '<br><br>';

    $x = 6;
    $y = 4;
    echo ($x > $y) ; '<br>'
    echo ($x < $y) , '<br>';
    echo ($x == $y) , '<br>';
    echo ($x == 6) , '<br>';

    echo '<br><br>';
    echo "=====================================<br>";
    echo 'Operadores Logicos<br>';
    echo "=====================================<br>";
    echo '<br><br>';

    $x = 4;
    $y = 5;

    if ( ( $x == 4 ) && ($y == 5) ) 
    {
        print 'Estas en lo correcto';
    }
    echo '<br><br>';
    if(($x ==4) || ($y ==3)){
        echo 'La segunda operacion tambien es verdadera';
    }

    ?>

</body>
</html>
