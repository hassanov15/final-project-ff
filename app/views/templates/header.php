
<?php
include '../app/controllers/connect.php';
if (isset($_POST['logout'])) {
    session_destroy()
    header('Location: viwes/home/login');
}
?>
