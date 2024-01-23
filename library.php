<?php

if(isset($_GET['page'])) {
  
  $page = $_GET['page'];
  switch ($page) {
     case'Home' :
       include 'home.php';
       break;
       
     case'masa lalu kelam' :
       include 'tampil_data.php';
       break;
       
     case'orang gila' :
       include 'input_data.php';
       break;
  }
  
}else{
  
  include 'home.php';
  
}

?>