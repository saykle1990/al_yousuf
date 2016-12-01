


<?php include 'functions.php'?>
<?php

$view = empty($view) ? 'home.php' : $_GET['view'].'.php';

switch ($_GET['view']){
    case 'home':
        include 'inc/header.php';
        include 'home.php';
        break;
    case 'content':
        include 'inc/headerNoIndex.php';
        include 'content.php';
        break;
    default:
        include 'inc/header.php';
}
?>


<?php include "inc/footer.php"?>