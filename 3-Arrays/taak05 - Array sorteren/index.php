<!DOCTYPE html>
<html>
<body>

<?php
$getallen = [676, 5345, 78657, 3, 46, 21, 47];
arsort($getallen);
    
	foreach($getallen as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


?>

</body>
</html> 