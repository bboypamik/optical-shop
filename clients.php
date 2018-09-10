<table class="table table-striped datatable mt-5">
    <a class="form-control  btn-primary  col-2 text-center mt-5" href="/new-client">Novi komitent</a>
    <thead>
    <h5 class="mt-5">Komitenti</h5>

    <tr>
        <th>redni broj</th>
        <th>Ime</th>
        <th>Adresa</th>

        <th>Broj telefona</th>
        <th>Napomena</th>
        <th>Izmeni</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach (getClientsBox() as $client) : ?>
        <tr>
            <td><?php echo $client["id"] ?></td>
            <td><?php echo $client["name"] . " " . $client["surname"] ?></td>

            <td><?php echo $client["adress"] . " " . $client["city"] ?></td>

            <td><?php echo $client["phone"] ?></td>
            <td><?php echo $client["note"] ?></td>
            <td><a href="/change-client/<?php echo $client['id'] ?>"><i class="fas fa-pencil-alt"></i></a></td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


