<?php
session_start(); 

  $user_data = isset($_SESSION['user_data'])? $_SESSION['user_data'] : null;
  $errors = array();
  $conn = mysqli_connect('localhost', 'root', '', 'registration');


if(isset($_POST['btn_save_pwd'])) {

  $errors = array();

  $current_password = $_POST['current_password'];
  $new_password = $_POST['new_password'];
  $confirm_password = $_POST['confirm_password'];
  $username = $_SESSION['user_data']['username'];

  //Form validation
  if (empty($current_password)) { array_push($errors, "Current password is required"); }
  if (empty($new_password)) { array_push($errors, "New password is required"); }
  if (empty($confirm_password)) { array_push($errors, "Confirm password is required"); }


  if(count($errors) > 0) {
    $_SESSION['flashdata'] = "Fill all fields";
  }

  else if(!isPasswordCorrect($conn, $username, $current_password)){
   $_SESSION['flashdata'] = "Incorrect current password";
  }

  else if ($new_password != $confirm_password) {
    $_SESSION['flashdata'] = "The two passwords do not match";
  } 

  else {
     $updated = updatePassword($conn, $username, $new_password);
    $_SESSION['flashdata'] = $updated ? "Password updated" : "An error occured";
  }

  header("location: account.php");
}

//function isFilled(){}

  function isPasswordCorrect($conn, $username, $password) {
      $query = "SELECT * FROM users WHERE username = ? AND password = ?";
      $password = md5($password);
      $stmt = $conn->prepare($query);
      $stmt->bind_param("ss",$username, $password);
      $stmt->execute();
      $result = $stmt->get_result();
      if($result->num_rows == 1) {
        return true;
      }
      return false;
  }

  function updatePassword($conn, $username, $new_password) {
    $query = "UPDATE `users` SET `password`= ? WHERE username = ?";
    $new_password = md5($new_password);
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $new_password, $username);
    return $stmt->execute();
  }


