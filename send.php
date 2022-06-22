<?php
header("Content-type: text/plain; charset=UTF-8");

if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{

  if (isset($_POST['request']))
  {
      echo $_POST['request'];

      $fp = fopen("html_file.html", "w");
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