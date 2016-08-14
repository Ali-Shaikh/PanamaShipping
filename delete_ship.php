<?php
session_start();
if( empty($_SESSION['user']) ) {
    header("Location: index.php");
}
?>
<?php
include_once 'dbconfig.php';

if( isset($_GET['id']) ) {

    $id = $_GET['id'];
    $sql_query = "DELETE FROM ship WHERE id = '$id'";
    $res = mysql_query($sql_query);

    if (!$res) {
        die('Error: ' . mysql_error());
    }

    header("Location: Ships.php");
    die();
}

?>