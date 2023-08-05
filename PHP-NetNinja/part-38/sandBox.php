<?php
    //SESSION
    if (isset($_POST['submit'])) {
        session_start();

        $_SESSION['name'] = $_POST['name'];

        //COOKIE FOR GENDER
        setcookie("gender", $_POST['gender'], time() + 86400);
        
        //redirect user
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php tutorials</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="name">
            <select name="gender">
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
            <input type="submit" value="submit" name="submit">   
        </form>
    </body>
</html>