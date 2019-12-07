<?php
$data = array();
flexible_function($data);
function flexible_function(&$data)
{
    $function = "login";
    if(isset($_GET['action']))
    {
        $function = $_GET['action'];
    }
    $function($data);
}

function login(&$data){
   
    $data['page'] = "authentication/login";
}

function dashboard(&$data) {
   
    $data['page'] = "dashboard/homedashboard";
}
function wepa(&$data) {
  
    $data['page'] = "class/wep_a";
}

