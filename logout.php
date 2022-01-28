<?php 
session_start();
unset($_SESSION['ad']);
session_destroy();
echo"<script>window.location='admin login.php';</script>";
?>