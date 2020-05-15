<h1>Set Language Preference</h1><br>
The currently selected language is: <br>

<form action="#" method="post">
    <select name="language">
        <option value="any">Any</option>
        <option value="english">English</option>
        <option value="spanish">Spanish</option>
        <option value="Dutch">Dutch</option>
    </select><br>
<input type="submit" name="submit" value="Set preference">
</form>

<?php

if(isset($_POST['submit'])){
$selected_val = $_POST['language'];
echo "Language ".$selected_val." is set";

$cookie_name = "selectedLang";
$cookie_value = $selected_val;
setcookie($cookie_name, $cookie_value, time() + 86400, "/");

if(!isset($selected_val)) {
    echo "The currently selected language is:".$selected_val;
} else {
    echo "The currently selected language is:".$selected_val;
}
};

?>