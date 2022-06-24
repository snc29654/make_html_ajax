<?php
header("Content-type: text/plain; charset=UTF-8");

if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{

  if (isset($_POST['request']))
  {
      echo $_POST['request'];
      echo $_POST['action'];

    if($_POST['action']=="0"){
      $fp = fopen("html_file0.html", "w");
    }
    if($_POST['action']=="1"){
      $fp = fopen("html_file1.html", "w");
    }
    if($_POST['action']=="2"){
      $fp = fopen("html_file2.html", "w");
    }
    if($_POST['action']=="3"){
      $fp = fopen("html_file3.html", "w");
    }

      if ($fp) {
        fwrite($fp, $_POST['request']);
        fclose($fp);
      
    }

  }
  else
  {
      echo 'not found.';
  }
}
?>