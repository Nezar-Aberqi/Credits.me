<?php 
    if(isset($_POST['iddoc'])){
        $exitloan = new ClientController();
        $exitloan->deleteDoc();
    }
?>