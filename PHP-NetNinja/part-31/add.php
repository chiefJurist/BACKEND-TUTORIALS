<?php
    //Include the connection to database    
    include("config/connect.php");

    $title = $email = $ingredients = "";
    $errors = ['email' => '', 'title' => '', 'ingredients' => ''];

    if (isset($_POST['submit'])) {
        //email validation
        if (empty($_POST['email'])) {
            $errors['email'] = "An email is required";
        }else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Please provide a valid email address';
            }
        }

        //title validation
        if (empty($_POST['title'])) {
            $errors['title'] = "A title is required";
        }else {
            $title = $_POST['title'];
            if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
                $errors['title'] = 'Title must be letters and spaces';
            }
        }

        //ingredients validation
        if (empty($_POST['ingredients'])) {
            $errors['ingredients'] = "At least one ingredient is required";
        }else {
            $ingredients = $_POST['ingredients'];
            if (!preg_match('/^([a-zA-Z\s]+)(, \s*[a-zA-Z\s]*)*$/', $ingredients)) {
                $errors['ingredients'] = 'Ingredients must be letters seperated by commas';
            }
        }

        /*//ERROR CHECKING
        if (array_filter($errors)) {
            echo 'errors in the form';
        }else{
            echo 'form is valid';
        }*/

        //REDIRECTING
        if (!array_filter($errors)) {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
        }

        //CREATE SQL
        $sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title', '$email', '$ingredients')";

        //SAVE TO DATABASE AND CHECK
        if (mysqli_query($conn, $sql)) {
            //success
            header('Location: index.php');
        }else{
            //error
            echo 'query error: ' .mysqli_error($conn);
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
                <input type="email" name="email" value="<?php echo htmlspecialchars($email) ?>">
                <div class="red-text"><?php echo $errors['email']?></div>

                <label>Pizza Title : </label>
                <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
                <div class="red-text"><?php echo $errors['title']?></div>

                <label>Ingrdients (comma seperated) : </label>
                <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
                <div class="red-text"><?php echo $errors['ingredients']?></div>

                <div class="center">
                    <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
                </div>
            </form>
        </section>

       <?php include("templates/footer.php") ?>
</html>