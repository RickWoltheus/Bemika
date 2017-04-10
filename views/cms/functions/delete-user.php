<?php  

$user->deleteUser($_GET['id']);

$user->redirect("?action=accounts");