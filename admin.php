<?php
require('./includes/php/header.inc.php');
?>
    <!--            Shows username if user is logged in-->
<?php if (isset($user)) { ?>
    <div class="container p-5">
        <div class="card bg-light mb-3">
            <div class="card-header">
                <h5>Welkom <?php echo $user->username ?></h5>
            </div>
        </div>

        <a type="button" class="btn btn-primary btn-lg btn-block" href="updatemenu.php">Menu aanpassen</a>
        <a type="button" class="btn btn-primary btn-lg btn-block" href="orders.php">Bestellingen</a>

    </div>

<?php } else {
    header('Location: index.php');
} ?>

<?php require('./includes/php/footer.inc.php'); ?>