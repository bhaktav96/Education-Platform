<?php

session_start();
$r=uniqid(rand());
$_SESSION['user_id']=(int)$r;

$mysqli =new mysqli('localhost','root','tiger','authentication');