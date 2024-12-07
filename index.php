<?php

  if($_GET['page']=="") { $_GET['page']="home"; }
  $filepath = "./" . $_GET['page'] . ".html";
  if(file_exists($filepath) && is_file($filepath)) {
    require("header.html");
    include $filepath;
    /*
    $fp2=fopen($filepath,"r");
    while(!feof($fp2)) {
      $read=fread($fp2,1024);
      echo $read;
    }
    */
    require("footer.html");
  }
  else {
    @ob_clean();
    header("HTTP/1.0 404 Not Found");
    echo "Oops! Not Found";
  }


?>