<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "Login: " . $_SESSION['login'] . "<br>";
echo "Password: " . $_SESSION['pass'];
?>
</body>
</html>