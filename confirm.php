<!DOCTYPE html>
<html lang="nl">
<head>
<?php
if (array_key_exists('loginname', $_POST)){$loginname = $_POST['loginname'];}
if (array_key_exists('Password', $_POST)){$password = $_POST['Password'];}
if (array_key_exists('username', $_POST)){$username = $_POST['username'];}
if (array_key_exists('streetname', $_POST)){$streetname = $_POST['streetname'];}
if (array_key_exists('house_number', $_POST)){$house_number = $_POST['house_number'];}
if (array_key_exists('place', $_POST)){$place = $_POST['place'];}
if (array_key_exists('transport', $_POST)){$transport = $_POST['transport'];}

include "content/head.php";
?>
<title>Bevestigings pagina</title>
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="template/templateconfirm.css"
</head>
<body>
<?php
include "content/header.php";
include "content/navigation.php";
include "content/sectionconfirm.php";
include "content/sectionimage.php";
include "content/footer.php";
?>
</body>
</html>
