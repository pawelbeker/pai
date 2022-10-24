<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form method="post">
    <input type="text" name="login">
    <input type="password" name="pass">
    <input type="submit">
</form>
<?php
if(isset($_POST['login'], $_POST['pass']))
{
    $cookie_login = $_POST['login'];
    $cookie_pass = sha1($_POST['pass']);
    setcookie("login", $cookie_login, time() + 86400, "/");
    setcookie("pass", $cookie_pass, time() + 86400, "/");
    header("Location: /ok/pai/0/ok10/4/ok10d.php");
}
?>

</body>
</html>