<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $gender = $_POST["gender"];
  $dob = $_POST["dob"];
  $country = $_POST["country"];

  $userdata = $_POST;

  //save userdata to files
  $filepath = "./userdata.csv";
  $handle = fopen($filepath, "a");
  fwrite($handle, implode(" \n", $userdata));
  fclose($handle);

  //print to the user
  print_r($userdata);
?>