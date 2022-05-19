<?php
$host = "localhost";
$user = "root";
$password = '';
$name = "codepenguin";

if (isset($_GET['Logout'])) {
    $SESSION_START = session_start();
    $SESSION_DESTROY = session_destroy();
    unset($_SESSION['EmailId']);
    if ($SESSION_DESTROY) {
        echo "<script>alert('Are you sure, you want to Log Out?');
        window.location.href='Index.php';</script>";
    }
}
?>