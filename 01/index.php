<?php
session_start();

include __DIR__ . '/functions.php';

if (null == getCurrentUser()) {
    header('Location: ' . '/01/login.php');
    exit();
}else{
    ?>Main page! Hello, <?php echo $_SESSION['user']; ?>!<?php
}
?>

