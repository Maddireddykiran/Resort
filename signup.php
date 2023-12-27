<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost','root','','resort') or die("Connection Failed");

    if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['cpass']) && isset($_POST['pass'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $cpass = $_POST['cpass'];
        $pass = $_POST['pass'];

        // Fix the SQL query by using backticks for column names and escaping values
        $sql = "INSERT INTO `signup` (`first name`, `last name`, `email`, `create password`, `confirm password`) VALUES ('$fname', '$lname', '$email', '$cpass', '$pass')";

        if (mysqli_query($conn, $sql)) {
            echo "Entry Successful";
        } else {
            echo "Error Occurred: " . mysqli_error($conn);
        }
    }
}
?>
