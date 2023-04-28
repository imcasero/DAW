<?php
session_start();
if(!isset($_SESSION['contador'])){
    $_SESSION['contador'] = 0;
}
$_SESSION['contador']++;
echo '
<html>
<a href="contador2.php">Página que muestra el contador</a>
</html>
';
?>
