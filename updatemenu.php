<?php
require('./includes/php/header.inc.php');
require('./includes/php/addmenu.inc.php');

$stmt = $pdo->prepare("SELECT * FROM menu");
$stmt->execute([]);
$menu = $stmt->fetchALL();

$stmt = $pdo->prepare("SELECT * FROM category");
$stmt->execute([]);
$categories = $stmt->fetchALL();

require('./includes/html/menumodal.inc.html');

?>

<div class="container p-5">
    <h1 class="text-center">Ons menu</h1>
    <hr class="mb-4">
    <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#menuModal">Menu
        item toevoegen
    </button>
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
    <div class="row">
        <div class="col-md-8 order-md-1">
            <!--    foreach so you can show the data from database menu-->
            <?php foreach ($menu as $menuitem) { ?>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="col-md-8 order-md-1">
                            <p1><?php echo $menuitem->dish ?></p1>
                        </div>
                        <div class="col-md-4 order-md-2">
                            <p1 class="float-right mr-2">€ <?php echo $menuitem->price ?></p1>
                        </div>
                    </li>
                </ul>
            <?php } ?>
        </div>

    </div>
</div>


<?php require('./includes/php/footer.inc.php'); ?>
