<div class="p-3">
    <div class="card">
        <div class="card-header bg-light mb-3"><?php echo $menuitem->dish ?></div>
        <div class="card-body">
            <p>Prijs: € <?php echo $menuitem->dish ?></p>
            <p>Ingrediënten: <?php echo $menuitem->ingredient ?></p>
            <p>Allergieën: <?php echo $menuitem->allergie ?></p>
        </div>
        <form action="index.php" method="POST">
            <input type="number" name="quantity" value="1" min="1" max="<?= $menuitem->quantity ?>"
                   placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?= $menuitem->id ?>">
            <input type="submit" value="Bestellen">
        </form>
    </div>
</div>