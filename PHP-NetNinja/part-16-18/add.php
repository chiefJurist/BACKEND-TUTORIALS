<?php
    if (isset($_POST["submit"])) {
        echo htmlspecialchars($_POST["email"]); //"htmlspecialchars()" function protects our sites from XSS attacks
        echo htmlspecialchars($_POST["title"]);
        echo htmlspecialchars($_POST["ingredients"]);
    }
?>
<!DOCTYPE html>
<html>
       <?php include("templates/header.php") ?>

        <section class="container grey-text">
            <h4 class="center">Add a pizza</h4>

            <form action="add.php" method="POST" class="white">
                <label>Your Email: </label>
                <input type="email" name="email">
                <label>Pizza Title : </label>
                <input type="text" name="title">
                <label>Ingrdients (comma seperated) : </label>
                <input type="text" name="ingredients">
                <div class="center">
                    <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
                </div>
            </form>
        </section>

       <?php include("templates/footer.php") ?>
</html>