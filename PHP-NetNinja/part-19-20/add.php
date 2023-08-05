<?php
    if (isset($_POST['submit'])) {
        /*//BASIC FORM VALIDATION
        //email validation
        if (empty($_POST['email'])) {
            echo 'An email is requred';
        }else {
            echo htmlspecialchars($_POST["email"]); //"htmlspecialchars()" prevents XSS attacks
        }

        //title validation
        if (empty($_POST['title'])) {
            echo 'A title is requred';
        }else {
            echo htmlspecialchars($_POST["title"]);
        }

        //ingredients validation
        if (empty($_POST['ingredients'])) {
            echo 'At least one ingredient is requred';
        }else {
            echo htmlspecialchars($_POST["ingredients"]);
        }*/


        //ADVANCED FORM VALIDATION
        //email validation
        if (empty($_POST['email'])) {
            echo "<br/> An email is required <br/>";
        }else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo 'Please provide a valid email address';
            }
        }

        //title validation
        if (empty($_POST['title'])) {
            echo "<br/> A title is required <br/>";
        }else {
            $title = $_POST['title'];
            if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
                echo 'Title must be letters and spaces';
            }
        }

        //ingredients validation
        if (empty($_POST['ingredients'])) {
            echo "<br/> At least one ingredient is required <br/>";
        }else {
            $ingredients = $_POST['ingredients'];
            if (!preg_match('/^([a-zA-Z\s]+)(, \s*[a-zA-Z\s]*)*$/', $ingredients)) {
                echo 'Ingredients must be letters seperated by commas';
            }
        }
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