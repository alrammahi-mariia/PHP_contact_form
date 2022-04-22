<?php
    if (isset($_POST['submit'])) {
      $mailto = "mariia.al-rammahi@edu.bc.fi";
      $email = $_POST['email'];
      $name = $_POST['name'];
      $subject = $_POST['subject'];
      $message = 
      "You have a new message from: \nEmail: " . $email . "\n" . "Name: " .$name . "\n" . "Message: " . $_POST['message'];
      
      $headers = "Sender: ". $email;
      $parameters = $name;

      if (mail($mailto, $subject, $message, $headers, $parameters)) {
          echo "<p>Thank you" . ", " . $name . "!". " " . "Your message was successfully sent.</p>"; 
      } else {
          echo "<p>Something went wrong</p>";
      }
    }
  ?>