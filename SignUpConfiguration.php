<?php
$host = "localhost";
$user = "root";
$password = '';
$name = "codepenguin";

if (isset($_POST['SignUpButton'])){
    $FULLNAME = $_POST['FullName'];
    $SIGNUPEMAILID = $_POST['SignUpEmailId'];
    $SIGNUPPASSWORD = $_POST['SignUpPassword'];

    $conn = mysqli_connect($host, $user, $password, $name);
    if ($conn) {
        $sql = "INSERT into signupdetails VALUES ('', '$FULLNAME', '$SIGNUPEMAILID', '$SIGNUPPASSWORD')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Your Sign Up is done Successfully!');
            window.location.href='LogIn.php';</script>";
        } else {
                echo "<script>alert('Failed to Sign Up!');
                window.location.href='SignUp.php';</script>";
        }
    }
}
?>