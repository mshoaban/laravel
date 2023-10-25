<?php 
$link = mysqli_connect("localhost", "root", "", "db_student");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}



?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Details</h2>
    <a href="index.php" class="btn btn-primary"> Insert Data</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include the database configuration
            

            // Query to retrieve data from the database
            $query = "SELECT * FROM persons LIMIT 3";
            $result = mysqli_query($link, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo '<td><a class="btn btn-primary" href="edit.php?id=' . $row['id'] . '">Edit</a> | <a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
                    echo "</tr>";
                }
            } else {
                echo "No data found in the database.";
            }

            // Close the database link
            mysqli_close($link);
            ?>
        </tbody>
    </table>
</div>
</body>
</html>

