<?php
session_start();
// You can change your timezone
date_default_timezone_set("Asia/Kolkata");
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
     
    $cb = fopen("log.html", 'a');
    fwrite($cb, "<div class='msgln'>(".date("g:i:s A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($cb);
}
?>