<?php
require_once "connection.php";

if (isset($_POST['submit'])) { // button is clicked 1.
    // get values from form 2.
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // validate inputs 3.
    $sql = "INSERT INTO students (id,fname,lname,email,password) VALUES (NULL, '$fname','$lname','$email', '$password')";
    // execute query 4.
    $result = mysqli_query($conn,$sql);
    // check if query was successful 5.
    if($result) {
        echo "Registration successful!";
        header("Location: list.php"); // redirect to list page
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="form">
        <div class="title">
            <p>REGISTRATION FORM</p>
        </div>
        <form action="" method="post">
            <input type="text" name="fname" placeholder="Enter Your Fname">
            <input type="text" name="lname" placeholder="Enter Your Lname">
            <input type="email" name="email" placeholder="Enter Your Email">
            <input type="password" name="password" placeholder="Enter Your Password">
            <input type="password" placeholder="Confirm Password">
            <input type="submit" name="submit" value="kwiyandikisha">
            <a href="list.php">Already Registered...!! </a>
        </form>
    </div>
</body>

</html>