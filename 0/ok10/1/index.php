<?php
// Start the session
session_start();
header('Location: /ok/pai/0/ok10/1/ok10a.php')
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["num"] = 125;
$_SESSION["txt"] = "Okei";
echo "Session variables are set.";
?>

</body>
</html>