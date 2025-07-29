<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST OF REGISTERED</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <a style="color: white;" href="index.php">Click to Register</a>
  
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Fname</th>
                <th>Lname</th>
                <th>Email</th>
                <th>Password</th>
                <th>ACTION</th>
        
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetching data from the database 1.
                $sql = " SELECT * FROM students";
                $result = mysqli_query($conn, $sql);
                $sn = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <!-- display data from db[table(rows)] -->
                        <td><?php echo $sn++ ?></td>
                        <td><?php echo $row["fname"] ?></td>
                        <td><?php echo $row["lname"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["password"] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>  
    </table>


</body>
</html>