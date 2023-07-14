<?php
session_start();
$name = $_SESSION['username'];
$title = $name . " - profile";
include "./komponen/partials/head.php";
?>
<?php include "./komponen/partials/navtop.php"?>




<?php include "./komponen/partials/navbottom.php"?>
<?php include "./komponen/partials/footer.php"?>