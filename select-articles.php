<?php
$client = getClient($params[1]);


?>
<script>
    var quantity = [];
    <?php foreach (getArticlesBox() as $article) : ?>
    quantity[<?php echo $article["id"] ?>] = <?php echo $article["quantity"]?>;
    <?php endforeach; ?>
</script>



<div class="row">
    <div class="col-4">

       <h4 class="mt-5"> <?php echo $client["name"] . " " . $client["surname"] ?>  </h4>
       <p>Redni broj: <?php echo $client["id"] ?></p>
        <h6><?php echo $client["adress"] . " " . $client["city"] ?></h6>
       <p>telefon: <?php echo $client["phone"] ?> </p>
        <p>komentar: <?php echo $client["note"] ?> </p>
    </div>
<div class="col-1"></div>

<div class="col-7 mt-5">
    <form method="post" action="/save-order">
    <div id="articles">
        <div>
            <div class="wrapper">
                <select name="articles[]">
                    <option> --- </option>
                    <?php foreach (getArticlesBox() as $article) : ?>
                        <option value="<?php echo $article["id"] ?>"><?php echo $article["name"]. " - ".  $article["price"].' din ('. $article["quantity"].' '.$article["unit_of_measure"]. ')'  ?></option><br />
                    <?php endforeach; ?>
                </select>

                <input type="text" class="quantity" oninput="checkMax(this)" size="10" name="quantity[]" value="" max="0" placeholder="količina" />

                <input type="hidden" name="client" value="<?php echo $params[1] ?>" />
            </div>
        </div>
    </div>
    <br />
    <button type="button" id="addArticle"> Dodaj novi artikl</button>
        <input type="submit" value="Pošalji" class="form-control  btn-primary forma mt-5">
    </form>
</div>
</div>






