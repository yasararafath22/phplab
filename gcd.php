<?php
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
$num1 = 56;
$num2 = 98;
echo "GCD of $num1 and $num2 is " . gcd($num1, $num2);
?>
