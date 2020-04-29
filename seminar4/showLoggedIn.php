<?php
use classes\Controller\Controller;
require_once 'resources/fragments/init.php';
if (isset($_POST['userN']) && isset($_POST['passW'])) {
    $ctr = Controller::setController();
    $userN = htmlentities($_POST['userN'], ENT_QUOTES);
    $passW = htmlentities($_POST['passW'], ENT_QUOTES);
    $value = $ctr->loginID($userN, $passW);   
   
     
   
    if($value === true) {   //om det stämmer visa att login är succesfull
        $ctr->setUsername($userN);    
        Controller::storeController($ctr);
       // include 'resources/views/loginSuccesfull.php';
        echo "Login Succesfull";
    }  
     if($value === false) {         //om det inte stämmer så visa att är fel
      //  include 'resources/views/fel.html';
         echo "Login Unsuccesfull";
    }   
    
      
    //value=value
}



