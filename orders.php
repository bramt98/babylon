<?php
/* @var stdClass[] $menu */

require('./includes/php/header.inc.php');
require('./includes/php/addmenu.inc.php');
require('./includes/php/shoppingcart.inc.php');

$stmt = $pdo->prepare("SELECT * FROM orderinfo");
$stmt->execute([]);
$orderinfo = $stmt->fetchAll();

?>
<div class="container-fluid p-0">
    <div class="bg-primary w-100 p-1">
        <h1 class="text-center text-white">Nieuwe bestellingen</h1>
    </div>
    <div class="card text-white bg-primary m-3" style="max-width: 18rem;">
        <div class="card-header">Bestelling</div>
        <div class="card-body">
            <?php foreach ($orderinfo as $order) { ?>
                <p class="card-text">1x Kapsalon</p>
                <hr class="bg-white">
                <p class="card-text">Straat & huisnummer: <?= $order->street ?> <?= $order->housenumber ?></p>
                <p class="card-text">Stad & postcode: <?= $order->city ?> <?= $order->zip ?></p>
                <hr class="bg-white">
                <p class="card-text">Bedrijf: <?= $order->company ?></p>
                <p class="card-text">Opmerking: <?= $order->note ?></p>
                <hr class="bg-white">
                <p class="card-text">Naam: <?= $order->name ?></p>
                <p class="card-text">Email: <?= $order->email ?></p>
                <p class="card-text">Telefoonnummer: <?= $order->phonenumber ?></p>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <div class="bg-success w-100 p-1 ">
        <h1 class="text-center text-white">Bestelling onderweg</h1>
    </div>
    <div class="card text-white bg-success m-3" style="max-width: 18rem;">
        <div class="card-header">Bestelling</div>
        <div class="card-body">
            <?php foreach ($orderinfo as $order) { ?>
                <p class="card-text">1x Kapsalon</p>
                <hr class="bg-white">
                <p class="card-text">Straat & huisnummer: <?= $order->street ?> <?= $order->housenumber ?></p>
                <p class="card-text">Stad & postcode: <?= $order->city ?> <?= $order->zip ?></p>
                <hr class="bg-white">
                <p class="card-text">Bedrijf: <?= $order->company ?></p>
                <p class="card-text">Opmerking: <?= $order->note ?></p>
                <hr class="bg-white">
                <p class="card-text">Naam: <?= $order->name ?></p>
                <p class="card-text">Email: <?= $order->email ?></p>
                <p class="card-text">Telefoonnummer: <?= $order->phonenumber ?></p>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <div class="bg-danger w-100 p-1 ">
        <h1 class="text-center text-white">Bestelling afgeleverd of opgehaald</h1>
    </div>
    <div class="card text-white bg-danger m-3" style="max-width: 18rem;">
        <div class="card-header">Bestelling</div>
        <div class="card-body">
            <?php foreach ($orderinfo as $order) { ?>
                <p class="card-text">1x Kapsalon</p>
                <hr class="bg-white">
                <p class="card-text">Straat & huisnummer: <?= $order->street ?> <?= $order->housenumber ?></p>
                <p class="card-text">Stad & postcode: <?= $order->city ?> <?= $order->zip ?></p>
                <hr class="bg-white">
                <p class="card-text">Bedrijf: <?= $order->company ?></p>
                <p class="card-text">Opmerking: <?= $order->note ?></p>
                <hr class="bg-white">
                <p class="card-text">Naam: <?= $order->name ?></p>
                <p class="card-text">Email: <?= $order->email ?></p>
                <p class="card-text">Telefoonnummer: <?= $order->phonenumber ?></p>
            <?php } ?>
        </div>
    </div>
</div>

<?php require('./includes/php/footer.inc.php'); ?>


