<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form method = "post">
            <label for = "email">Email:</label>
            <input type = "text" id="email" name="email"><br>
            <button type = "submit">Submit</button>
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)+$/';
        if(preg_match($pattern, $_POST['email'])){
            echo 'Valid email';
            }
            else{
                echo 'Invalid email';
            }
        }
        ?>
    </body>
</html>