<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite number is " . $_SESSION["num"] . ".<br>";
echo "Favorite text is " . $_SESSION["txt"] . ".";
?>
<form method="post">
    <input type="submit" name="sub">
</form>
<?php
if(isset($_POST['sub'])){
    session_destroy();
}
?>
</body>
</html>