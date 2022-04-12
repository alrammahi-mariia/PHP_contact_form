<?php
    if (isset($_POST['submit'])) {
      $emailto = "mariia.bieskova@gmail.com";
      $email = $_POST['email'];
      $name = $_POST['name'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      
      $parameters = $name;
      $headers = $email;

      if (mail($emailto, $subject, $message, $parameters,$headers)) {
          echo "<p>Your message was successfully sent</p>"; 
      } else {
          echo "<p>Something went wrong</p>";
      }
    }
  ?>