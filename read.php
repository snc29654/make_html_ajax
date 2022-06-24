<?php
header("Content-type: text/plain; charset=UTF-8");

if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{

  if (isset($_POST['request']))
  {

    if($_POST['action']=="0"){
	    $file = file_get_contents('html_file0.html');
    }
    if($_POST['action']=="1"){
	    $file = file_get_contents('html_file1.html');
    }
    if($_POST['action']=="2"){
	    $file = file_get_contents('html_file2.html');
    }
    if($_POST['action']=="3"){
	    $file = file_get_contents('html_file3.html');
    }
  echo $file;

      

  }
  else
  {
      echo 'not found.';
  }
}
?>