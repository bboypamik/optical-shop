<?php if (isset($_POST["submit"])) :?>

<?php
changeClient();
?>

<?php else: ?>

<?php
$client = getClient($params[1]);
?>
    <h2 class="text-center pt-5">Izmenite Klijenta</h2>
    <form method="post">
        <label for="name">Ime</label>
        <input type="text" name="name" value="<?php echo $client['name'] ?>" class="form-control mb-2 forma">
        <input type="hidden" name="id" value="<?php echo $client['id'] ?>">
        <label for="surname">Prezime</label>
        <input type="text" name="surname" value="<?php echo $client['surname'] ?>" class="form-control mb-2 forma">
        <label for="adress">Adresa</label>
        <input type="text" name="adress" value="<?php echo $client['adress'] ?>" class="form-control mb-2 forma">
        <label for="city">Grad</label>
        <input type="text" name="city" value="<?php echo $client['city'] ?>" class="form-control mb-2 forma">
        <label for="phone">Telefon</label>
        <input type="text" name="phone" value="<?php echo $client['phone'] ?>" class="form-control mb-2 forma">
        <label for="note">Napomena</label>
        <input type="text" name="note" value="<?php echo $client['note'] ?>" class="form-control mb-2 forma">

        <input type="submit"  name="submit" value="IZMENI" class="form-control mb-4 btn-primary forma mb-5">

    </form>

<?php endif; ?>