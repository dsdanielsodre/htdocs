<?php
    if(isset($_REQUEST['sair'])){
        session_destroy();
        session_unset($_SESSION['usuariocsa']);
        session_unset($_SESSION['senhacsa']);
        header("Location:index.php");
    }
?>
