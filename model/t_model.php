<?php
  function m_view()
  {
    include "conection.php";
    $query = "SELECT*FROM wep_a";
    $result = mysqli_query($connection, $query);
    if ($result && mysqli_num_rows($result) > 0) {
      foreach ($result as $recoud) {
        $rows[] = $recoud;
      }
    }
    return $rows;
  }
