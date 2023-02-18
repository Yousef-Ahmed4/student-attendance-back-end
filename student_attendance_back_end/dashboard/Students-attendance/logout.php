<?php
session_start();
session_destroy();

echo  'you logged out successfully to go login page <a href="sign-in.php">Click Here</a>';
?>