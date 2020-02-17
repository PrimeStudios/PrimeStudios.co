<?php
$name = $_GET['name'];
$email = $_GET['email'];
$webdesign = $_GET['webdesign'];
$sysadmin = $_GET['sysadmin'];
$seo = $_GET['seo'];
$budget = $_GET['budget'];
$comments = $_GET['comments'];

if ($webdesign == 'on') {
	$webdesign = 1;
}

if ($sysadmin == 'on') {
	$sysadmin = 1;
}

if ($seo == 'on') {
	$seo = 1;
}

$mySQLHost = 'localhost';
$mySQLUser = 'root';
$mySQLPassword = '';
$mySQLDBName = 'contact-api';
$mySQLPort = 3306;


$mySQLInstance = mysqli_connect($mySQLHost, $mySQLUser, $mySQLPassword, $mySQLDBName, $mySQLPort);

if (!$mySQLInstance) {
    header('Location: ../');
} else {
    mysqli_query($mySQLInstance, "insert INTO requests (name, email, webdesign, sysadmin, seo, budget, comments) values('". $name ."', '". $email ."', '". $webdesign ."', '". $sysadmin ."', '". $seo ."', '". $budget ."', '". $comments ."');");
    header('Location: ../contact');
}
?>
