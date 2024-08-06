<?php

include '/components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin/admin_login.php');
}
else{
    header('location:admin/dashboard.php');
}

?>