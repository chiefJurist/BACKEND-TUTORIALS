<?php

    if (isset($_POST["submit"])) {
        echo "Form submitted";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP OOP TUTORIAL</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="new-user">
            <h2>Create new user</h2>

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <label>Username: </label>
                <input type="text" name="username">

                <label>Email: </label>
                <input type="text" name="email">

                <input type="submit" value="submit" name="submit">
            </form>
        </div>
    </body>
</html>