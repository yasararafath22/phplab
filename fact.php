<?php
function factorial($num) {
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }
    return $fact;
}
$num = 5; // Change this number as needed
echo "Factorial of $num is " . factorial($num);
?>
