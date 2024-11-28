<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <form method = "post">
            <label for = "acc">Account:</label>
            <input type = "text" id="acc" name="acc"><br>
            <button type = "submit">Submit</button>
        </form>
        <?php
        $pattern = '/^[_a-z0-9]{6,}$/';
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(preg_match($pattern, $_POST['acc'])){
                echo 'Valid account';
            }else{
                echo 'Invalid account';
            }
        }
        ?>
    </body>
</html>