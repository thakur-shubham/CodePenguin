<?php
$host = "localhost";
$user = "root";
$password = '';
$name = "codepenguin";

if (isset($_POST['LogInButton'])){
    $LOGINEMAILID = $_POST['LogInEmailId'];
    $LOGINPASSWORD = $_POST['LogInPassword'];

    $conn = mysqli_connect($host, $user, $password, $name);
    if ($conn) {
        $sql = "select * from signupdetails";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows ($result)>0) {
            while ($data = mysqli_fetch_assoc($result)) {
                if ($data['EmailId'] == $LOGINEMAILID AND $data['Password'] == $LOGINPASSWORD) {
                    header("location:Home.php");
                } else {
                    echo "<script>alert('Wrong Email Id and Password!');
                    window.location.href='LogIn.php';</script>";
                }
            }
        }
    }
}
?>