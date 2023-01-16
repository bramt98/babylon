<?php
require('./includes/php/header.inc.php');
require('./includes/php/login.inc.php');
?>

<div class="login-form">
    <form action="login.php" method="POST">
        <h2 class="text-center">Login Babylon</h2>
        <!--If user fills in a wrong email or password they get the error message: "Het ingevulde wachtwoord of email is fout"-->
        <?php if (isset($inputFields)) { ?>
            <p class="text-danger"><?php echo $inputFields ?></p>
        <?php } ?>
        <!--If user fills in a wrong email or password they get the error message: "Het ingevulde wachtwoord of email is fout"-->
        <?php if (isset($wrongLogin)) { ?>
            <p class="text-danger"><?php echo $wrongLogin ?></p>
        <?php } ?>
        <div class="form-group">
            <input type="text" name="userName" class="form-control" placeholder="Gebruikersnaam" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Wachtwoord" required>
        </div>
        <div class="form-group">
            <button name="login" class="btn btn-primary btn-block" type="submit">Inloggen</button>
        </div>
    </form>
</div>

<?php require('./includes/php/footer.inc.php'); ?>