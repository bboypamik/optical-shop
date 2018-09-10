<?php if (isset($_POST["submit"])) :?>

    <?php
    editArticle();
    ?>

<?php else: ?>

    <?php
    $article = getArticle();
    ?>
    <h2 class="text-center pt-5">Izmeni artikl</h2>
    <form method="post">
        <label for="name">Naziv</label>
        <input type="text" name="name" value="<?php echo $article['name'] ?>" class="form-control mb-2 forma">
        <input type="hidden" name="id" value="<?php echo $article['id'] ?>">
        <label for="unitOfMeasure">Jedinica mere</label>
        <input type="text" name="unitOfMeasure" value="<?php echo $article['unit_of_measure'] ?>" class="form-control mb-2 forma">
        <label for="quantity">Količina</label>
        <input type="text" name="quantity" value="<?php echo $article['quantity'] ?>" class="form-control mb-2 forma">
        <label for="minQuantity">Min količina</label>
        <input type="text" name="minQuantity" value="<?php echo $article['min_quantity'] ?>" class="form-control mb-2 forma">
        <label for="price">Cena</label>
        <input type="text" name="price" value="<?php echo $article['price'] ?>" class="form-control mb-2 forma">
        <label for="pdvStopa">PDV stopa</label>
        <input type="text" name="pdvStopa" value="<?php echo $article['PDV_stopa'] ?>" class="form-control mb-2 forma">

        <input type="submit"  name="submit" value="IZMENI" class="form-control mb-4 btn-primary forma mb-5">

    </form>

<?php endif; ?>