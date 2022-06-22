<?php
header("Content-type: text/plain; charset=UTF-8");

if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{

  if (isset($_POST['request']))
  {


	$file = file_get_contents('html_file.html');
	echo $file;

      

  }
  else
  {
      echo 'not found.';
  }
}
?>