<?php    
    // wep_a
      function m_wepa(){
      $query = " SELECT * FROM wepa";
      include "conection.php";
      $ressult = mysqli_query($connection,$query);
      $rows =[];
      if($ressult && mysqli_num_rows($ressult) > 0){
        foreach($ressult as $record){
          $rows[] = $record;
          }
        }
        return $rows;
      }
      
      // wep_b
      function m_wepb(){
        $query = " SELECT * FROM wepb";
        include "conection.php";
        $ressult = mysqli_query($connection,$query);
        $rows =[];
        if($ressult && mysqli_num_rows($ressult) > 0){
          foreach($ressult as $record){
            $rows[] = $record;
            }
          }
          return $rows;
        }
      // sna
      function m_sna(){
        $query = " SELECT * FROM sna";
        include "conection.php";
        $ressult = mysqli_query($connection,$query);
        $rows =[];
        if($ressult && mysqli_num_rows($ressult) > 0){
          foreach($ressult as $record){
            $rows[] = $record;
            }
          }
          return $rows;
        }
        // attendent wep a
        
        function m_attendent_wepa(){
          if(isset($_POST['save'])){
            // $data = m_wepa();
          include "conection.php";
          $query = " INSERT INTO attendent_wepa SELECT * FROM wepa";
          $result = mysqli_query($connection, $query);
          return $result;
        }
        }
  ?> 


  