<?php
//Cheat phpstorm so you don't get a error on $pdo
/* @var PDO $pdo */

$stmt = $pdo->prepare("SELECT * FROM menu");
$stmt->execute([]);
$menu = $stmt->fetchALL();

//Action if you click button with name="createPost"
if (isset($_POST['createPost'])) {
    $dish = filter_var($_POST["postDish"], FILTER_SANITIZE_STRING);
    $price = filter_var($_POST["postPrice"], FILTER_SANITIZE_STRING);
    $ingredient = filter_var($_POST["postIngredient"], FILTER_SANITIZE_STRING);
    $allergie = filter_var($_POST["postAllergie"], FILTER_SANITIZE_STRING);
    $category = filter_var($_POST["postCategory"],FILTER_SANITIZE_STRING);

    $stmt = $pdo->prepare("SELECT id FROM category WHERE name = ?");
    $stmt->execute([$category]);
    $idcategory = $stmt->fetchALL();


    //Inserting input into database
    $stmt = $pdo->prepare("INSERT INTO menu(dish, price, ingredient, allergie, category_id) VALUES(?, ?, ?, ?, '2')");
    $stmt->execute([$dish, $price, $ingredient, $allergie]);
    header('Location: updatemenu.php');
}