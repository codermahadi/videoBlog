<?php
 include '../cms/constants/constants.php';
 include '../cms/lib/Database.php';
 include '../cms/lib/Main.php';

 $con = new Main();

echo $con->likeUpdate($_GET['id'], $_GET['value'])

?>