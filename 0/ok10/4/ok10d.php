<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "Login: " . $_COOKIE['login'] . "<br>";
echo "Password: " . $_COOKIE['pass'];
?>
</body>
</html>