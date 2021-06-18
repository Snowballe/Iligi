<?php 
function getNotice(){
    $db=dbConnect();
  
    $getText=$db->prepare('SELECT commercial_notice FROM admin_user_notice WHERE id_notice=1');
  
    $getText->execute()or die(print_r($getText->errorInfo()));;
  
    return $getText;
  }


?>