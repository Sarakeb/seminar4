<?php
use classes\Controller\Controller;
require_once 'resources/fragments/init.php';
///uppdatera och visa kommentarer
if($_POST && !empty($_POST['comment'])){
    $ctr = Controller::accessController();
    $name = $ctr->getUsername();
    $kommentar = htmlentities($_POST['comment'], ENT_QUOTES);
    $ctr->commentAdd($name, $kommentar, $_POST['holderMod']);
}

$display = $_POST['holderMod'];


