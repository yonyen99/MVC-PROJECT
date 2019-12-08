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

// wep_a
function wepa(&$data) {
    $data['view'] = m_wepa();
    $data['page'] = "class/wep_a";
}
// wep_b
function wepb(&$data) {
    $data['view'] = m_wepb();
    $data['page'] = "class/wep_b";
}
// sna
function sna(&$data) {
    $data['view'] = m_sna();
    $data['page'] = "class/sna";
}

// attendent wep a
function attendent_wepa(&$data){
  $data['view'] = m_wepa();
  $data['page'] = "class_absents/attentdent_wep_a";
}


