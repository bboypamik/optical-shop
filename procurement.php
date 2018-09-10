<pre>
<?php
$procurement = getProcurement($params[1]); // koristiš getOne
$procurement_items = getProcurementItems($params[1]); // koristiš getAll
$client = getClient($procurement['client_id']);
//print_r($procurement);
?>
    </pre>
<h1 class="receipt text-center">Račun</h1>
<div class="row">
    <div class="col-4">

        <h4 class=""> Optičarska radnja </h4>

        <h6>Industrijska 6</h6>
        <h6>Futog</h6>

    </div>
    <div class="col-2"></div>


</div>

<div class="row">
    <div class="col-8"></div>
    <div class="col-4">
        <h4 class="mt-5"> <?php echo $client["name"] . " " . $client["surname"] ?>  </h4>
        <p>Redni broj: <?php echo $client["id"] ?></p>
        <h6><?php echo $client["adress"] ?></h6>
        <h6><?php echo $client["city"] ?></h6>


    </div>
</div>

<h3>Račun nabavke br. <?php echo $procurement['id'] ?></h3>
<h6>Datum prometa dobara: <?php echo date("m.d.Y"); ?></h6>
<?php if (!$procurement['finished']): ?>
<form action="/finish_procurement" method="post">
    <?php endif; ?>
    <input type="hidden" name="order_id" value="<?php echo $procurement["id"] ?>">
    <table class="table table-striped  mt-5 mb-5">
        <thead>
        <tr>
            <th>id</th>
            <th>Naziv</th>
            <th>Jedinica mere</th>
            <th>količina</th>
            <th>cena bez PDV</th>
            <th>PDV stopa</th>
            <th>Cena sa PDV</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($procurement_items as $index => $item) : ?>
            <tr>
                <td>
                    <?php echo $index + 1 ?>
                    <input type="hidden" name="articles[<?php echo $item['procurement_item_id'] ?>][]"
                           value="<?php echo $item["quantity"] ?>">
                </td>
                <td><?php echo $item["name"] . " " . $item["price"] ?></td>
                <td><?php echo $item["unit_of_measure"] ?></td>

                <td><?php echo $item["quantity"] ?></td>
                <td><?php echo $item["price"] ?></td>

                <td><?php echo $item["PDV_stopa"] ?></td>
                <td><?php echo $item["price"] * $item["PDV_stopa"] / 100 + $item["price"] * $item["quantity"] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>

    <h4 class="text-right">Ukupno: <?php echo $procurement['sum']; ?></h4>
    <div class="row">
        <div class="col-10"></div>
        <div class="col-2">
            <?php if (!$procurement['finished']): ?>
                <input type="submit" value="Završi" class="form-control  btn-primary forma mt-5">

            <?php else: ?>
                <button id="print" type="button" class="form-control  btn-primary forma mt-5">Štampa</button>
            <?php endif; ?>
        </div>
    </div>
    <?php if (!$procurement['finished']): ?>
</form>
<?php endif; ?>