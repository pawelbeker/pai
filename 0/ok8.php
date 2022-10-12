<!DOCTYPE html>
<html>
    <head><meta charset="utf-8"><title>ok8</title></head>
    <body>
        <form method="post">
            Login:<input type="text" name="log1"> <br><br>
            Hasło:<input type="password" name="pass1"> <br><br>
            Zapamiętaj mnie:<input type="checkbox" name="check1">
            <input type="submit" value="OK">
        </form>
        <?php
        function ok(){
            echo "<br>Login: " . $_POST['log1'] . "<br><br>Hasło: " . sha1($_POST['pass1']);
            if(isset($_POST['check1'])){
                echo "<br>(Zapamiętane)";
            }
            else{
                echo "<br>(Nie zapamiętane)";
            }
        }
        ok();
        ?>
        <hr>
        <form method="post">
            <input type="text" name="nazwa2" value="Pseudonim"> <br>
            <textarea style="resize:none;" name="text2" rows="15" cols="100">Tekst</textarea> <br>
            <input type="submit" value="Post">
        </form>
        <?php
        function lol(){
            if(isset($_POST['text2']) && isset($_POST['nazwa2'])){
                echo "(" . $_POST['nazwa2']. ")" . "<br>" . "''" . $_POST['text2'] . "''";
            }
        }
        lol();
        ?>
        <hr>
        <form>
            1. Select <br>
            <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select><br><br>
            2. Radio <br>
            <input type="radio" id="ok" name="ok" value="1">
            <label for="ok">ok1</label><br>
            <input type="radio" id="ok1" name="ok" value="2">
            <label for="ok1">ok2</label><br>
            <input type="radio" id="ok2" name="ok" value="3">
            <label for="ok2">ok3</label><br>
            <br>
            3. Checkbox <br>
            A - <input type="checkbox"><br>
            B - <input type="checkbox"><br>
            C - <input type="checkbox"><br><br>
            <input type="submit">
        </form>
        <hr>
    </body>
</html>