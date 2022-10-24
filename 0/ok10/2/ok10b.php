<?php
if(!isset($_COOKIE['user'])) {
  echo "Cookie named 'user' is not set!";
} else {
  echo "Cookie 'user' is set!<br>";
  echo "Value is: " . $_COOKIE['user'];
}
?>
<!DOCTYPE html>
<html>
<body>
<form method="post">
    <input type="submit" name="sub">
</form>
<?php
if(isset($_POST['sub'])){
setcookie("user", "", time() - 3600);
echo "Cookie 'user' is deleted.";
}
?>
</body>
</html>