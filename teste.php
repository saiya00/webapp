   <?php
   $password = "This is my password";

      $hashed_pw = better_crypt($password, $rounds);
     echo $password."<br>".$hashed_pw;
     
     ?>
     