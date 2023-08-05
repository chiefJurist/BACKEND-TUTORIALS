<?php
    //FORM VALIDATION CHAPTER

    //STEP 2: Create a variables to store input values and errors to be displayed
    $name = $email = $website = $comment = $gender = "";
    $nameErr = $emailErr = $websiteErr = $genderErr = "";


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $comment = $_POST['comment'];
        $gender = $_POST['gender'];

        //STEP 3: Check if the values are empty or invalid(using regex and so..)
        //name
        if (empty($_POST['name'])) {
            $nameErr = "Name is Required";
            return;
        }else {
            $name = testInput($_POST['name']);
            //validity
            if (!preg_match("/[abc]/i", $name)) {
                $nameErr = "Invalid name format";
            }
        }

        //email
        if (empty($_POST['email'])) {
            $emailErr = "email is Required";
            return;
        }else {
            $email = testInput($_POST['email']);
            //validity
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid Email Format";
            }
        }

        //website
        if (empty($_POST['website'])) {
            $websiteErr = "Name is Required";
            return;
        }else {
            $website = testInput($_POST['website']);
            //validity
            if (filter_var($website, FILTER_VALIDATE_URL)) {
               $websiteErr = "Invalid URL";
            }
        }

        //gender
        if (empty($_POST['gender'])) {
            $genderErr = "gender is Required";
            return;
        }else {
            $gender = testInput($_POST['gender']);
        }

        //STEP 5: Submit to databas
        echo $name .'<br>';
        echo $email .'<br>';
        echo $website .'<br>';
        echo $comment .'<br>';
        echo $gender .'<br>';
    }

    //STEP 1: Create a function that will trim inputs, strip slashes and use htmlspecial chars
    function testInput($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form hanling tutorial</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            Name*<br>
            <input type="text" name="name" placeholder="Input your name here" value="<?php echo $name ?>">
            <div><?php echo $nameErr ?></div>
            <br><br>

            Email*<br>
            <input type="text" name="email" placeholder="Input your email here" value="<?php echo $email ?>">
            <div><?php echo $emailErr ?></div>
            <br><br>

            Website*<br>
            <input type="text" name="website" placeholder="Input your website here" value="<?php echo $website ?>">
            <div><?php echo $websiteErr ?></div>
            <br><br>

            Comments<br>
            <textarea name="comment" cols="30" rows="10" value="<?php echo $comment ?>"></textarea><br><br>

            Gender*<br>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">male 
            <div><?php echo $genderErr ?></div>
            <br><br>

            <input type="submit" value="submit">
        </form>
    </body>
</html>