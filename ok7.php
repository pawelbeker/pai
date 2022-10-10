<!DOCTYPE html>
<head>
    <title>ok7</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="post">
        <input type="number" value="0" name="lol">
        <input type="submit">
    </form>
    <?php
    function age(){
        if($_POST['lol'] <=15){
            echo "Masz ". $_POST['lol'] ." lat, słaby jesteś";
        }
        elseif($_POST['lol'] >15 && $_POST['lol']<=24){
            echo "Masz ". $_POST['lol'] ." lat, ok jesteś";
        }
        elseif($_POST['lol'] >25 && $_POST['lol']<=68){
            echo "Masz ". $_POST['lol'] ." lat, spoko jesteś";
        }
        elseif($_POST['lol'] == 69){
            echo "Masz ". $_POST['lol'] ." lat, nice jesteś";
        }
        elseif($_POST['lol'] >149){
            echo "Masz ". $_POST['lol'] ." lat, wtf";
        }
        else{
            echo "Masz ". $_POST['lol'] ." lat, stary jesteś";
        };
        
    }
    age();
    ?>
</body>
