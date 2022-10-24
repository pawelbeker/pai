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
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['pass'] = sha1($_POST['pass']);
    header("Location: /ok/pai/0/ok10/3/ok10c.php");
}
?>

</body>
</html>