<?php
$cookie_name_one = "one";
$cookie_value_one = "Erik";
setcookie($cookie_name_one, $cookie_value_one, time() + 86400, "/"); // 86400 = 1 dag
$cookie_name_two = "two";
$cookie_value_two = "Turkesteen";
setcookie($cookie_name_two, $cookie_value_two, time() + 86400, "/"); // 86400 = 1 dag
$cookie_name_three = "three";
$cookie_value_three = "test@test.nl";
setcookie($cookie_name_three, $cookie_value_three, time() + 86400, "/"); // 86400 = 1 dag
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name_one]) && ($_COOKIE[$cookie_name_two]) && ($_COOKIE[$cookie_name_three])){
    echo "Er is nog geen cookie";
} else {
    echo "one: ".$_COOKIE[$cookie_name_one]."<br>";
    echo "two: ".$_COOKIE[$cookie_name_two]."<br>";
    echo "three: ".$_COOKIE[$cookie_name_three];
};
?>

</body>
</html>