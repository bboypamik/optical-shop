<div class="row">
    <div class="col-6">
        <table class="table table-striped mt-5">
            <thead>
            <h5 class="mt-5">Lista poslednjih prodaja</h5>
            <tr>
                <th>redni broj</th>
                <th>datum</th>
                <th>kupac</th>
                <th>iznos</th>
            </tr>
            </thead>

            <?php foreach (getSales() as $sale) : ?>
                <tbody>
                <tr>
                    <td><?php echo $sale["id"] ?></td>
                    <td><?php echo $sale["date_of_purchase"] ?></td>
                    <td><?php echo $sale["buyer"] ?></td>
                    <td><?php echo $sale["price"] ?></td>

                </tr>
                </tbody>

            <?php endforeach; ?>

        </table>
    </div>
    <div class="col-6">
        <table class="table table-striped mt-5">
            <thead>
            <h5 class="mt-5">Lista dospeća rata</h5>
            <tr>
                <th>redni broj</th>
                <th>datum</th>
                <th>kupac</th>
                <th>iznos</th>
            </tr>
            </thead>

            <?php foreach (getSales() as $sale) : ?>
                <tbody>
                <tr>
                    <td><?php echo $sale["id"] ?></td>
                    <td><?php echo $sale["date_of_purchase"] ?></td>
                    <td><?php echo $sale["buyer"] ?></td>
                    <td><?php echo $sale["price"] ?></td>

                </tr>
                </tbody>

            <?php endforeach; ?>

        </table>
    </div>
</div>