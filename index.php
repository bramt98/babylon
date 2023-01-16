<?php
/* @var stdClass[] $menu */

require('./includes/php/header.inc.php');
require('./includes/php/addmenu.inc.php');
require('./includes/php/shoppingcart.inc.php');

?>

    <div class="container">
        <h1 class="text-center">Ons menu</h1>
        <hr class="mb-4">
    </div>

    <div class="container">
        <ul class="filters_menu">
            <li class="active" data-filter="*">Alles</li>
            <li data-filter=".popular">Populaire gerechten</li>
            <li data-filter=".appetizer">Voorgerechten</li>
            <li data-filter=".salad">Salades</li>
            <li data-filter=".bread">Broodjes</li>
            <li data-filter=".durum">Dürüm</li>
            <li data-filter=".kapsalon">Kapsalon</li>
            <li data-filter=".dish">Schotels</li>
            <li data-filter=".mixed">Mixed grill</li>
            <li data-filter=".pizza">Pizza's</li>
            <li data-filter=".childmenu">Kindermenu's</li>
            <li data-filter=".extra">Extra's</li>
            <li data-filter=".drinks">Dranken</li>
        </ul>
    </div>

    <div class="container p-5">
        <div class="row">
            <div class="col-md-8 order-md-1">
                <section class="section-con">
                    <h2 class="p-2" style="background-color: #f8f5f2; font-size: 20px;">Populaire Gerechten</h2>
                <!--    foreach so you can show the data from database menu-->
                <?php foreach ($menu as $menuitem) { ?>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="col-md-8 order-md-1">
                                <p1><?= $menuitem->dish ?></p1>
                            </div>
                            <div class="col-md-4 order-md-2">
                                <form action="index.php" method="GET">
                                    <input type="hidden" type="submit" name="id"
                                           value="<?= $menuitem->id ?>"/>
                                    <button class="float-right btn btn-primary">+</button>
                                </form>
                                <p1 class="float-right mr-2">€ <?= $menuitem->price ?></p1>
                            </div>
                        </li>
                    </ul>
                <?php } ?>
                </section>
            </div>
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
                        <strong>€</strong>
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
                <a class="btn btn-primary btn-lg btn-block mt-3" href="checkout.php">Afrekenen</a>
            </div>
        </div>
    </div>

<?php require('./includes/php/footer.inc.php'); ?>