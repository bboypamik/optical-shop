<?php
$client = getClient($params[1]);
?>



<div class="row">
    <div class="col-4">


        <h4 class="mt-5"> <?php echo $client["name"] . " " . $client["surname"] ?>  </h4>
        <p>Redni broj: <?php echo $client["id"] ?></p>
        <h6><?php echo $client["adress"] . " " . $client["city"] ?></h6>
        <p>telefon: <?php echo $client["phone"] ?> </p>
        <p>komentar: <?php echo $client["note"] ?> </p>
    </div>
    <div class="col-2"></div>

    <div class="col-4 mt-5">
        <a class="form-control  btn-primary  text-center mb-5" href="/add-article/<?php echo $client['id'] ?>">Dodaj Stavku</a>
        <form method="post" action="/save-procurement">
            <input type="hidden" name="client" value="<?php echo $params[1] ?>" />
            <div id="articles">
                <div>
                    <div class="wrapper">
                        <select name="articles[]">
                            <?php foreach (getArticlesBox() as $article) : ?>
                                <option value="<?php echo $article["id"] ?>"><?php echo $article["name"]. " ".  $article["price"]  ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input type="text" size="10" name="quantity[]" value="" placeholder="količina" />
                    </div>
                </div>
            </div>
            <br />
            <button type="button" class="mb-5" id="addArticle"> Dodaj novi artikl</button>
            <input type="submit" value="Pošalji" class="form-control  btn-primary forma mt-5">

        </form>
    </div>
</div>

