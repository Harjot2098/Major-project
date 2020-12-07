<?php

$i=$_SESSION['a'];
if($i)
{
 include 'pr.php';
}
else
{
header('location:post_log.php');
}

?>
