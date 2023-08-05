<?php
    //Connecting to a database
    $conn = mysqli_connect("localHost", "chiefJurist", "#Chibueze2003", "ninja_pizzas");

    //Checking the connection
    if (!$conn) {
        echo "connection error" . mysqli_connect_error();
    }

    //Write query for all pizzas
    $sql = "SELECT title, ingredients, id FROM pizzas ORDER BY created_at";

    //Make query and get results
    $result = mysqli_query($conn, $sql);

    //Fetch the resulting rows as am array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn)
?>

<!DOCTYPE html>
<html>
    <?php include("templates/header.php") ?>

    <h4 class="center grey-text">Pizzas</h4>
    
    <div class="container">
        <div class="row">
            <?php foreach ($pizzas as $pizza) :?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h5><?php echo htmlspecialchars(strtoupper($pizza['title']))?></h5>
                            <ul>
                                <?php foreach (explode(",", $pizza["ingredients"]) as $ing) :?>
                                    <li><?php echo htmlspecialchars($ing) ?></li>
                                <?php endforeach?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a href="#" class="brandtext">more info</a>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>

    <?php include("templates/footer.php") ?>
</html>