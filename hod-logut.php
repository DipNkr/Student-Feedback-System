<?php
session_start();

unset($_SESSION['brnc']);

echo"<script>location.href='includes/faculty.php';</script>";

?>