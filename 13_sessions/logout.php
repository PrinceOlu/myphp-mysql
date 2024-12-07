<?php

// Start the session
session_start();

// destroy the seeion
session_destroy();
header('location:index.php');
?>