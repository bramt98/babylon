<?php
//Destory session to logout user and redirect to homepage
session_start();
session_destroy();
header('Location: ../../login.php');