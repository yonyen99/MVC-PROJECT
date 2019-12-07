<?php    

      function m_view(){
      $query = "SELECT * FROM wepa";
      include "connection.php";
      $ressult = mysqli_query($connection,$query);
      $rows =[];
      if($ressult && mysqli_num_rows($ressult) > 0){
        foreach($ressult as $record){
          $rows[] = $record;
          }
        }
        return $rows;
      }
  ?> 


  