
<?php
if (isset($_SESSION['auth']) != 1) {
    header('Location: /home');
}
?>
