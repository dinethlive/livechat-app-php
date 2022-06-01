<?php 
$myTextFileHandler = @fopen("log.html","r+");
@ftruncate($myTextFileHandler, 0);
header("Location:index.php");
 ?>