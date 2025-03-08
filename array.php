<?php
$array = [
    [10, 20, 30],
    [5, 50, 15],
    [25, 35, 40]
];

$max = max(array_map('max', $array));
echo "Maximum Value: $max";
?>
