<?php
require_once("model/employeeConfig.php");

$req = new employeeConfig();

if(isset($_GET['id']) && isset($_GET['req'])){
    if($_GET['req']== "delete"){
        $req->setId($_GET['id']);
        $req->delete();
    }

    header("Location: index.php");
                exit();
}
?>