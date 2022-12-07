<?php

  $con=mysqli_connect("localhost:3307", "root", "", "e_commerce");

  if(mysqli_connect_error()){
    echo "Cannot Connect";
  }
?>