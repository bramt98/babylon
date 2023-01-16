<?php
//Cheat phpstorm so you don't get a error on $pdo
/* @var PDO $pdo */

//Action if you click button with name="register"
if (isset($_POST['checkout'])) {
    require('./config/db.php');

    //Filter so you can't do a sql injection
    $street = filter_var($_POST["street"], FILTER_SANITIZE_STRING);
    $housenumber = filter_var($_POST["housenumber"], FILTER_SANITIZE_EMAIL);
    $zip = filter_var($_POST["zip"], FILTER_SANITIZE_STRING);
    $city = filter_var($_POST["city"], FILTER_SANITIZE_STRING);
    $company = filter_var($_POST["company"], FILTER_SANITIZE_STRING);
    $note = filter_var($_POST["note"], FILTER_SANITIZE_STRING);
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    $phonenumber = filter_var($_POST["phonenumber"], FILTER_SANITIZE_STRING);

    //Check if input fields are empty
    if (empty($street) || empty($housenumber) || empty($zip) || empty($city) || empty($name) || empty($email) || empty($phonenumber)) {
        $inputFields = "Alle velden moeten zijn ingevuld om te kunnen registreren!";

    } else {
        $stmt = $pdo->prepare("INSERT into orderinfo(street, housenumber, zip, city, company, note, name, email, phonenumber) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$street, $housenumber, $zip, $city, $company, $note, $name, $email, $phonenumber]);
        header('Location: index.php');
    }
}

