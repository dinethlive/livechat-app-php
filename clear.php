<?php 

//create a file handler by opening the file
$myTextFileHandler = @fopen("log.html","r+");

//truncate the file to zero
//or you could have used the write method and written nothing to it
@ftruncate($myTextFileHandler, 0);

//use location header to go back to index.html
header("Location:index.php");
 ?>