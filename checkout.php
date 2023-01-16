<?php
require('./includes/php/header.inc.php');
require('./includes/php/addmenu.inc.php');
require('./includes/php/shoppingcart.inc.php');
require('./includes/php/checkout.inc.php');
?>

    <div class="container p-5">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Winkelmandje</span>
                    <span class="badge badge-secondary badge-pill"></span>
                </h4>
                <?php if (empty($_SESSION ['cart'])) { ?>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Klik op bestel om een item in je winkelmand toe te voegen</h6>
                        </div>
                    </li>
                <?php } else {
                foreach ($_SESSION ['cart']

                as $menuitem) { ?>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><?= $menuitem->dish ?></h6>
                        </div>
                        <span class="text-muted">€ <?= $menuitem->price ?></span>
                    </li>
                    <?php }
                    } ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Totaal</span>
                        <strong>€9.50</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Kortings code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Voeg toe</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Afrekenen</h4>
                <form class="p-5 bg-light" action="checkout.php" method="POST">
                    <h5>Bezorgadres</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="street">Straat</label>
                            <input type="text" class="form-control" name="street" placeholder="Typ je straatnaam" value="" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="housenumber">Huisnummer</label>
                            <input type="number" class="form-control" name="housenumber" placeholder="Typ je huisnummer" value="" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="zip">Postcode</label>
                            <input type="text" class="form-control" name="zip" placeholder="Typ je postcode" value="" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="city">Woonplaats</label>
                            <input type="text" class="form-control" name="city" placeholder="Typ je stad" value="" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="company">Bedrijfsnaam (optioneel)</label>
                            <input type="text" class="form-control" name="company" placeholder="Typ je bedrijfsnaam" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="note">Opmerking toevoegen (optioneel)</label>
                            <input type="text" class="form-control" name="note" placeholder="bijv.: Niet aanbellen. De hond blaft." value="">
                        </div>
                    </div>

                    <hr class="mb-4">
                    <h5>Persoonlijke gegevens</h5>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Voor- en achternaam</label>
                            <input type="text" class="form-control" name="name" placeholder="Typ je voornaam en achternaam" value="" required="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email">E-mailadres</label>
                            <input type="email" class="form-control" name="email" placeholder="jouwnaam@email.com" value="" required="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phonenumber">Telefoon</label>
                            <input type="text" class="form-control" name="phonenumber" placeholder="Typ je telefoonnummer in" value="" required="">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block mt-3" type="submit" name="checkout" >Bestellen</button>
                </form>
            </div>
        </div>
    </div>

<?php require('./includes/php/footer.inc.php'); ?>