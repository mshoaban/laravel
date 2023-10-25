<?php
    $link = mysqli_connect("localhost", "root", "", "db_student");
// Check link
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

        $id = $_GET['id'];
$del = "DELETE FROM persons WHERE id = $id";

mysqli_query($link, $del);
        header("Location: details.php");