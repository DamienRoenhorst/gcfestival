<?php
$cookie_name = "test";
$cookie_value = "hey mijn cookie werkt";
setcookie($cookie_name, $cookie_value, time() + 86400, "/"); // 86400 = 1 dag
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>