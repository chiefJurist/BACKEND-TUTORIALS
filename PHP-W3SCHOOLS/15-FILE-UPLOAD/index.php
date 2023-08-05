<?php
    $target_dir = 'uploads/';
    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Check If the image is an actual image
    if (isset($_POST["submit"]) && isset($_FILES['fileToUpload']) && !empty($_FILES['fileToUpload']['name'])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo 'file is an image' . $check['mime'] . '.';
            $uploadOk = 1;
        }else {
            echo 'file is not an image';
            $uploadOk = 0;
        }

        //Check if the file already exists
    if (file_exists($target_file)) {
        echo 'Sorry, file already exists <br>';
        $uploadOk = 0;
    }

    //Limit file size (500kb)
    if ($_FILES["fileToUpload"]["size"] > 500000) {
       echo "Sorry, your file size is too large <br>";
       $uploadOk = 0;
    }

    //Limit file type
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo 'Sorry, only JPG, JPEG, PNG and GIF files are allowed <br>';
        $uploadOk = 0;
    }

    //Check if there is an error
    if ($uploadOk == 0) {
       echo 'Sorry your file was not uploaded';
    } else {
        //If everything is ok, then upload the file
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo 'The file ' . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "has been uploaded";
        }else{
            "Sorry there was an error in uploading your file";
        }
    }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>file upload tutorial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
            Select to upload: <br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </body>
</html>