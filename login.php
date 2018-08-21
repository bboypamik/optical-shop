<?php if (isset($_POST["submit"])) :?>

    <?php
    session_start();
    include 'db.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = :username AND password = :password ";

    $statment = $conn->prepare($sql);
    $statment->bindParam(":username",$username);
    $statment->bindParam(":password",$password);
    $statment->execute();
    $login = $statment->fetch();

    if ($login ){
        $_SESSION["is_logged"] = true;
        $_SESSION["username"] = $login['username'];
        $_SESSION["user_id"] = $login['id'];
        header('Location: index.php');
    }
    else{
        echo "Pogrešno korisničko ime ili lozionka, probajte ponovo.";
    }

    ?>
<?php else: ?>

    <html>
    <head>
        <title>login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
              integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/animate.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>

    <div class="container">
        <h2 class="m-5 p-5">ULOGUJ SE</h2>
        <form method="post">
            <label for="username">Username</label>
            <input type="text" name="username" required class="form-control mb-2 forma">

            <label for="password">Šifra</label>
            <input type="password" name="password" required class="form-control mb-2 forma">
            <input type="submit"  name="submit" value="LOGIN" class="form-control mb-4 btn-primary forma mb-5">


        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/scripts.js"></script>
    </body>
    </html>

<?php endif ?>