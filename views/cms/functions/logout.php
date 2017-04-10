<?php 

session_unset();
session_destroy();
$user->redirect("?action=DEFAULT")
 ?>