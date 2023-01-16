<?php
//Action if you click button with name="Login"
if (isset($_POST['login'])) {
    require('./config/db.php');

//Filter so you can't do a sql injection
    $userName = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

//Take email out of database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$userName]);
    $user = $stmt->fetch();

    //Check if input fields are empty
    if(empty($userName) || empty($password)) {
        $inputFields = "Alle velden moeten zijn ingevuld om in te kunnen loggen";
    }
//Check if password is correct
    if (isset($user)) {
        if ($password === $user->password) {
            echo "The password is correct";
            $_SESSION['userId'] = $user->id;
            header('Location: admin.php');
        } else {
            // echo "The login email or password is wrong";
            $wrongLogin = "Het ingevulde wachtwoord of email is fout";
        }
    }
}