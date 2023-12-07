<?php 
include ('../controllers/UsersController.php');
UsersController:: logout();
Redirect::to('login.php');
?>