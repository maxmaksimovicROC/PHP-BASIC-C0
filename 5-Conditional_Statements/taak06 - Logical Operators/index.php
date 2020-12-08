<!DOCTYPE html>
<html>
<body>

<?php
    $jan1 = 4;
    $jan2 = 9;
    if($jan1 < 10 && $jan1 > 2) {
        echo "het getal zit tussen de 10 en 2";
    } else {
        echo "het getal zit niet tussen de 10 en 2";
    }

    echo "<br>";

    if(!$jan2 = 5){
        echo "Jan2 is 5";
    } else {
        echo "jan2 is niet 5"
    }

    echo "<br>";

    if($jan1 == 4|| jan2 == 7){
        echo "een van de jan is waar";
    } else {
        echo"geen jan is waar";
    }

    echo "<br>";

    if($jan1 == 4 xor $jan2 == 8){
        echo "een van de 2 is waar ";
    } else {
        echo "beide zijn false";
    }
?>

</body>
</html> 