<?php
//Cheat phpstorm so you don't get a error on $menu
/* @var stdClass[] $menu */
//Cheat phpstorm so you don't get a error on $pdo
/* @var PDO $pdo */

//Creating variable $idMenu with input value="$menuitem->id" meaning of value is the id of menu in the database
$idMenu = (int)($_GET['id'] ?? null);

foreach ($menu as $menuitem) {
    //Check if the id of menu is equal to the id menu of input value="$menuitem->id"
    if ($idMenu === $menuitem->id) {
        $stmt = $pdo->prepare("SELECT * FROM menu WHERE id = ?");
        $stmt->execute([$idMenu]);
        $_SESSION ['cart'][] = $stmt->fetch();

    }
}
