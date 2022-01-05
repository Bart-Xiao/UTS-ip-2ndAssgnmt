<?php
  // parse json to array
  if( isset($_POST['message']) && isset( $_POST['email']) && isset( $_POST['cost'])) {
    $msg = "Thanks for renting cars from Hertz-UTS, the total cost is {$_POST['cost']}.\nDetails are as follows:\n";
    $msg .= $_POST['message'] ; 
    $email = $_POST['email'];

    echo $email;
    if( mail($email, 'an order', $msg)) {
      echo "email success"; 
    }  
  } else {
    echo "posting from failed...";
  }

  
?>