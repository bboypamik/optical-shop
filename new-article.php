<?php if (isset($_POST["submit"])) : ?>

    <?php
    newArticle()

    ?>

<?php else: ?>

    <h2 class="text-center pt-5">Nov artikl</h2>
    <form method="post">
        <label for="name">Naziv</label>
        <input type="text" name="name" value="" class="form-control mb-2 forma">
        <input type="hidden" name="id" value=">
        <label for="unitOfMeasure">Jedinica mere</label>
        <input type="text" name="unitOfMeasure" value="" class="form-control mb-2 forma">
        <label for="quantity">Količina</label>
        <input type="text" name="quantity" value="" class="form-control mb-2 forma">
        <label for="minQuantity">Min količina</label>
        <input type="text" name="minQuantity" value="" class="form-control mb-2 forma">
        <label for="price">Cena</label>
        <input type="text" name="price" value="" class="form-control mb-2 forma">
        <label for="pdvStopa">PDV stopa</label>
        <input type="text" name="pdvStopa" value="" class="form-control mb-2 forma">


        <input type="submit"  name="submit" value="KREIRAJ" class="form-control mb-4 btn-primary forma mb-5">

    </form>

<?php endif; ?>