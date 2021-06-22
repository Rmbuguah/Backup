<?php
// Setting a cookie
setcookie("username", "John Carter", time() + 30 * 24 * 60 * 60);
// Accessing an individual cookie value
echo $_COOKIE["username"];
echo "<br/>";

//checking if a cookie is set
if (isset($_COOKIE["username"])) {
    echo "Hi " . $_COOKIE["username"];
} else {
    echo "Welcome Guest!";
}
