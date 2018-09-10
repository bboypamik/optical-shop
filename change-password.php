



<?php if (isset($_POST["submit"])) :?>


<?php

changePassword()

    ?>

<?php else: ?>



<div class="container">
    <h2 class="text-center pt-5">Nova šifra</h2>
    <form method="post">


        <label for="password">Nova Šifra</label>
        <input type="password" name="password" value="" class="form-control mb-2 forma">
        <label for="password2">Još jednom </label>
        <input type="password" name="password2" value="" class="form-control mb-2 forma">


        <input type="submit"  name="submit" value="Promeni" class="form-control mb-4 btn-primary forma mb-5">
    </form>
</div>


<?php endif; ?>