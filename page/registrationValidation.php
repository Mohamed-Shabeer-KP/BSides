<?php
$nameErr = $emailErr = "";
$name = $email =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["inputUserame"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["inputUserame"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["inputEmail"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["inputEmail"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  

