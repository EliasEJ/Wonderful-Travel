<?php
require_once("env.php");
function con()
{
    try {
        $con = new PDO ("mysql:host=" . HOST . ";dbname=" . DB . ";charset=utf8", USER, PASS);        
        return $con;
    } catch (PDOException $e) {
        die('Error : ' . $e->getMessage());
    } finally {
        $con = null;
    }
}
?>