<?php
session_start();
include('database/dbconfig.php');
if($dbconfig)
{
  //  echo "Database Connected";
}
else
{
    header("Location: database/dbconfig.php");
}

// if(!$_SESSION['username'] || !$_SESSION['admin'])
if(!$_SESSION['admin'])
{
    header('Location: login.php?=security');
}
?>