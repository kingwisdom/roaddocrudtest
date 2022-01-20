<?php
    if(isset($_POST['create'])){
        require_once("model/employeeConfig.php");

        $req = new employeeConfig();

        
        $req->setfullName($_POST['fullName']);
        $req->setEmail($_POST['email']);
        $req->setPosition($_POST['position']);

        $req->insertData();

        echo "<script>alert(Data posted successfully);document.location='index.php'</script>";
    }
?>