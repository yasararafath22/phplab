<?php
$cookie_name = "last_visit";
$date = date("d-m-Y H:i:s");

if (isset($_COOKIE[$cookie_name])) {
    echo "Last Visited: " . $_COOKIE[$cookie_name];
} else {
    echo "This is your first visit!";
}

setcookie($cookie_name, $date, time() + (86400 * 30), "/");
?>
