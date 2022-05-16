<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   // checks whether we are logged in
   if (isset($_SESSION['id'])) {
    
    $array_student = array(
      array(
          "firstname" => "Jim", 
          "lastname" => "bo",
          "house" => "25 minto street"
          "town" => "aston clinton"
          "county" => "bucks"
          "country" => 
      )  
    );






    for ($i=0; $i < 5; $i ++) {
        $sql = "INSERT INTO student ... (firstname, lastname, 

        $result = mysqli_query($conn,$sql);
    } 
    

   }

?>
