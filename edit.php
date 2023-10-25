<!-- edit.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Edit Data</h2>
    <?php
    $link = mysqli_connect("localhost", "root", "", "db_student");
// Check link
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM persons WHERE id=$id";
        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
        } else {
            echo "Record not found.";
            exit;
        }
    } else {
        echo "Invalid request.";
        exit;
    }

    if (isset($_POST['update'])) {
        $new_first_name = $_POST['first_name'];
        $new_last_name = $_POST['last_name'];
        $new_email = $_POST['email'];
        $update_query = "UPDATE persons SET first_name='$new_first_name', last_name='$new_last_name', email='$new_email' WHERE id=$id";
        mysqli_query($link, $update_query);
        header("Location: details.php");
    }
    ?>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        First Name: <input type="text" class="form-control" name="first_name" value="<?php echo $first_name; ?>">
        Last Name: <input type="text" class="form-control" name="last_name" value="<?php echo $last_name; ?>">
        Email: <input type="text" class="form-control" name="email" value="<?php echo $email; ?>"><br>
        <input type="submit" name="update" class="btn btn-primary" value="Save Changes">
    </form>
</div>
</body>
</html>
