<?php
      $server = "localhost";
      $username = "COB4th";
      $password = "cob4th";
      $database = "cob4th";

      $conn = mysqli_connect($server,$username,$password,$database);

      if( isset($_REQUEST['submit_form'])) {
        $event = mysqli_real_escape_string($conn,$_REQUEST['event']);
        $name = mysqli_real_escape_string($conn,$_REQUEST['name']);
        $email = mysqli_real_escape_string($conn,$_REQUEST['email']);
        $phone = mysqli_real_escape_string($conn,$_REQUEST['phone']);
        $address = mysqli_real_escape_string($conn,$_REQUEST['address']);
        $state = mysqli_real_escape_string($conn,$_REQUEST['state']);
        $zip = mysqli_real_escape_string($conn,$_REQUEST['zip']);


      $register_ins_sql = "INSERT INTO register (event, name, email, contact_num, address, state, zip) VALUES ('$event', '$name', '$email', '$phone', '$address', '$state', '$zip')";
      mysqli_query($conn, $register_ins_sql);
    }
?>
