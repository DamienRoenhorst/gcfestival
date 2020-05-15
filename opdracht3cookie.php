<?php
$cookie_name_one = "test";
$cookie_value = "hey mijn cookie werkt";
setcookie($cookie_name_one, $cookie_value, time() + 86400, "/"); // 86400 = 1 dag
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name_one])) {
    echo "Er is nog geen cookie";
} else {
    echo "Cookie '" . $cookie_name_one . "' is aangemaakt!<br>";
    echo "Naam is: " . $_COOKIE[$cookie_name_one];
} else {
    setcookie($cookie_name_one, $cookie_value, time() - 86400, "/");
};
?>

</body>
</html>