<?php
session_start();
include('config.php');

if($dbconfig){

}else{
    header("Location: config.php");
}

if(!$_SESSION['username']){
    header('Location: login.php');
}
?>