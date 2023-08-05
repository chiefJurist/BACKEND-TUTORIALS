<?php
    include("config/connect.php");
    
    //DELETING A RECORD
    if (isset($_POST['delete'])) {
        $idToDelete = mysqli_real_escape_string($conn, $_POST["id_to_delete"]);

        $sql = "DELETE FROM pizzas WHERE id = $idToDelete";

        if (mysqli_query($conn, $sql)) {
            //success
            header("Location: index.php");
        }else {
            //failure
            echo "query error : " .mysqli_error($conn);
        }
    }

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

            <!--DELETE FORM-->
            <form action="details.php" method="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
                <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
            </form>
        <?php else : ?>
            <h5>No such pizza exists</h5>
        <?php endif ?>
    </div>
    
    <?php include("templates/footer.php") ?>
</html>