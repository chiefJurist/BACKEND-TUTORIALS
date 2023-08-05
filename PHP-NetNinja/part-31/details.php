<?php
    include("config/connect.php");

    //CHECK GET REQUEST ID PARAMETER
    if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        //MAKE SQL
        $sql = "SELECT * FROM pizzas WHERE id = $id";

        //GET THE QUERY RESULT
        $result = mysqli_query($conn, $sql);

        //FETCH THE RESULT IN ARRAY FORMAT
        $pizza = mysqli_fetch_assoc($result);

        //free result from memory
        mysqli_free_result($result);

        //close connection
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html>
    <?php include("templates/header.php") ?>

    <div class="container center">
        <?php if ($pizza) : ?>
            <h4><?php echo htmlspecialchars(strtoupper($pizza['title'])); ?></h4>
            <p>Created By:  <?php echo htmlspecialchars($pizza['email']); ?> </p>
            <p>Created At:  <?php echo htmlspecialchars($pizza['created_at']); ?> </p>
            <h5>Ingredients :</h5>
            <p> <?php echo htmlspecialchars($pizza['ingredients']); ?> </p>
        <?php else : ?>
            <h5>No such pizza exists</h5>
        <?php endif ?>
    </div>
    
    <?php include("templates/footer.php") ?>
</html>