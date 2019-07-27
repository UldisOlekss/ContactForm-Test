<!-- Collecting information from global Post, inserting into variables and inserting to database -->
<?php
require_once '../class/Database.php';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    
    $db = new Database();
    $db->setRecord($name, $phone, $address, $message);
    
    header("Location: ../index.php");
}
