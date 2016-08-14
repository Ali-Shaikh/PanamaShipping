<?php
include_once 'dbconfig.php';

if( isset($_POST['name']) ) {

    $name = $_POST['name'];
    $model = $_POST['model'];
    $weight = $_POST['weight'];
    $company_id = $_POST['company_id'];
    $ship_id = 'SP-100';
    
    $sql_query = "INSERT INTO ship (name, model, weight, company_id, ship_id) VALUES ('$name', '$model', '$weight', '$company_id', '$ship_id')";
    $res = mysql_query($sql_query);

    if (!$res) {
        die('Error: ' . mysql_error());
    }

    header("Location: Ships.php");
    die();
}
?>