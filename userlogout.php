<?php 
session_start();
unset($_SESSION['un']);
session_destroy();
echo"<script>window.location='user login.php';</script>";
?>