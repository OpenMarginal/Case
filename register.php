<?php
$username = isset($_GET['name'])?$_GET['name']:'';
$email = isset($_GET['email'])?$_GET['email']:'';
$password = isset($_GET['password'])?$_GET['password']:'';

$link = mysqli_connect('127.0.0.1','root','root','bigweb');
if(!$email){
  $sql = "SELECT * FROM `users` WHERE `name`= '$username' ";
  
  $res = mysqli_query($link,$sql);
  $row = mysqli_fetch_assoc($res);
  if($row){
    echo '1';
  }else{
    echo "0";
  }
}else if(!$username){
  $sql = "SELECT * FROM `users` WHERE `email`= '$email' ";
  $res = mysqli_query($link,$sql);
  $row = mysqli_fetch_assoc($res);
  if($row){
    echo '1';
  }else{
    echo "0";
  }
}else {
  $sql = "INSERT INTO `users` (`name`,`email`,`password`) VALUE('$username','$email','$password') ";
  
  $res = mysqli_query($link,$sql);
  if($res){
    echo '1';
  }else{
    echo "0";
  }
}









