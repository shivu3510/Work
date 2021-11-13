<?php 
   
   $con = mysqli_connect("localhost","root","","projectdatabase");
   // Check connection
   if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
            $sql="INSERT INTO `project1`( `firstname`, `lastname`, `Mobileno`) 
            values ('$_POST[firstname]','$_POST[lastname]','$_POST[Mobileno]')";
      
        if ($con->query($sql) === TRUE)
        {
            echo "Submitted";
        } 
        else{
            echo "Not Submitted";
        }

        mysqli_close($con);

?>