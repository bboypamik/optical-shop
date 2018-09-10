<?php if (isset($_POST["submit"])) : ?>

    <?php
     createClient()

    ?>

<?php else: ?>

    <h2 class="text-center pt-5">Nov klijent</h2>
    <form method="post">
        <label for="name">Ime</label>
        <input type="text" name="name" value="" class="form-control mb-2 forma">
        <input type="hidden" name="id" value=">
        <label for="surname">Prezime</label>
        <input type="text" name="surname" value="" class="form-control mb-2 forma">
        <label for="adress">Adresa</label>
        <input type="text" name="adress" value="" class="form-control mb-2 forma">
        <label for="city">Grad</label>
        <input type="text" name="city" value="" class="form-control mb-2 forma">
        <label for="phone">Telefon</label>
        <input type="text" name="phone" value="" class="form-control mb-2 forma">
        <label for="note">Napomena</label>
        <input type="text" name="note" value="" class="form-control mb-2 forma">

        <input type="submit"  name="submit" value="KREIRAJ" class="form-control mb-4 btn-primary forma mb-5">

    </form>

<?php endif; ?>