<?php

if (isset($_SERVER['REQUEST_URI'])) {
    $params = explode("/", ltrim($_SERVER['REQUEST_URI'], "/"));
//    print_r($params);
}


/**
 * @param $table
 * @param null $id
 * @return array
 */
function getAll($table, $id = null)
{

    global $conn;

    if ($id) {
        $sql = "SELECT * FROM $table where id=$id ORDER BY id DESC";
    } else {
        $sql = "SELECT * FROM $table ORDER BY id DESC ";
    }

    $statement = $conn->prepare($sql);

    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);

    return $statement->fetchAll();
}

/**
 * @param $table
 * @param $id
 * @return mixed
 */
function getOne($table, $id)
{
    global $conn;

    $sql = "SELECT * FROM $table WHERE id = $id";

    $statement = $conn->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement->fetch();
}

/**
 * @param null $id
 * @return mixed
 */
function getExam($id = null)
{

    global $conn;
    $sql = "SELECT * FROM eye_exam where id=$id ORDER BY id DESC ";

    $statement = $conn->prepare($sql);

    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);

    return $statement->fetch();
}

/**
 * @return array
 */
function getExamBox()
{
    global $conn;

    $sql = "SELECT eye_exam.id, eye_exam.date, clients.name, clients.surname   FROM eye_exam INNER JOIN clients ON eye_exam.client_id = clients.id";

    $statement = $conn->prepare($sql);

    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $exam = $statement->fetchAll();

    return $exam;
}


/**
 * @return arrayž
 */
function getSalesBox()
{
    $sales = getAll('last_sales');
    return $sales;
}

/**
 * @return array
 */
function getSales()
{
    $sales = getAll('last_sales');
    return $sales;
}

/**
 *
 */
function changePassword()
{
    global $conn;


    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    if ($password === $password2) {
        $sql = "UPDATE users SET password = '$password' WHERE id = 1";

        if ($conn->query($sql)) {
            echo "Šifra je uspešno promenjena";
            header('Location:/logout');
        } else {

            echo "Error: " . $sql . "<br>" . $conn->error;

        }

    } else {
        echo("<script LANGUAGE='JavaScript'>
    window.alert('Unesite istu šifru u oba polja');
    window.location.href='/change-password';
    </script>");


    }
}

/**
 * @return array
 */
function getClientsBox()
{
    $clients = getAll('clients');
    return $clients;
}

/**
 * Get all articles for Box
 * @return array
 */
function getArticlesBox()
{
    $articles = getAll('articles');
    return $articles;
}

/**
 * @return mixed
 */
function getClient($id)
{
    $client = getOne('clients', $id);

    return $client;
}

/**
 *
 */
function createClient()
{

    global $conn, $count, $current;

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $adress = $_POST['adress'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $note = $_POST['note'];

    $sql = "INSERT INTO clients (name, surname, adress, city, phone, note) VALUES ('$name', '$surname', '$adress','$city','$phone','$note')";

    if ($conn->query($sql)) {
        echo "New record created successfully";
        header('Location: /clients');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

/**
 *
 */
function changeClient()
{

    global $conn, $count, $current;

    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $adress = $_POST['adress'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $note = $_POST['note'];

    $sql = "UPDATE clients SET name = '$name', surname = '$surname', adress ='$adress', city ='$city', phone ='$phone', note ='$note' WHERE id = $id";

    if ($conn->query($sql)) {
        echo "New record created successfully";
        header('Location: /clients');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

/**
 *
 */
function newArticle()
{
    global $conn, $count, $current;

    $name = $_POST['name'];
    $unitOfMeasure = $_POST['unitOfMeasure'];
    $quantity = $_POST['quantity'];
    $minQuantity = $_POST['minQuantity'];
    $price = $_POST['price'];
    $pdvStopa = $_POST['pdvStopa'];
    $pdv = $price * $pdvStopa / 100;

    $sql = "INSERT INTO articles (name, unit_of_measure, quantity, min_quantity, price, PDV_stopa, PDV ) VALUES ('$name', '$unitOfMeasure', '$quantity', '$minQuantity','$price','$pdvStopa','$pdv')";

    if ($conn->query($sql)) {
        //$order_id = $conn->lastInsertId();
        echo "New record created successfully.";
        header('Location: /articles');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function addArticle()
{
    global $conn, $params;

    $name = $_POST['name'];
    $unitOfMeasure = $_POST['unitOfMeasure'];
    $minQuantity = $_POST['minQuantity'];
    $price = $_POST['price'];
    $pdvStopa = $_POST['pdvStopa'];


    $sql = "INSERT INTO articles (name, unit_of_measure,  min_quantity, price, PDV_stopa ) VALUES ('$name', '$unitOfMeasure',  '$minQuantity','$price','$pdvStopa')";

    if ($conn->query($sql)) {
        //$order_id = $conn->lastInsertId();
        echo "New record created successfully.";
        header('Location: /procurement-articles/' . $params[1]);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

/**
 * @return mixed
 */
function getArticle()
{
    global $params;

    $article = getOne('articles', $params[1]);

    return $article;
}

function editArticle()
{
    global $conn, $count, $current;
    $id = $_POST['id'];
    $name = $_POST['name'];
    $unitOfMeasure = $_POST['unitOfMeasure'];
    $quantity = $_POST['quantity'];
    $minQuantity = $_POST['minQuantity'];
    $price = $_POST['price'];
    $pdvStopa = $_POST['pdvStopa'];
    $pdv = $price * $pdvStopa / 100;

    $sql = "UPDATE articles SET name = '$name', unit_of_measure = '$unitOfMeasure', quantity ='$quantity', min_quantity ='$minQuantity', price ='$price', PDV_stopa ='$pdvStopa', PDV = '$pdv'  WHERE id = $id";

    if ($conn->query($sql)) {
        echo "New record created successfully";
        header('Location: /articles');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


/**
 * Uzima sve odabrane artikle iz tabele articles
 *
 * @param $articles
 * @param $quantity
 * @return array
 */


function saveOrder($articles, $quantity, $client)
{
    /**
     * TODO:
     * prvo treba da obradiš podatke koje si dobio iz forme i da ih uneseš prvo u:
     * 1. orders  tabelu (date, client,total)
     * 2. order_items id artikla, $order_id = $conn->lastInsertId();, order_quantity, price*quantity=total
     * kada uneseš te podatke možeš da ih proslediš na order/$order_id
     * Pogledaj kod djoleta pa ubaci ako fali neki field u tabeli, i obrati pažnju na inserte da budu dobra imena jer sam ja nalupao.
     */

    global $conn;

    $articles = implode(',', $articles);

    $sql = "SELECT * FROM articles WHERE id IN ($articles) ORDER BY FIELD(id,$articles)";

    $statement = $conn->prepare($sql);

    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $selectedArticles = $statement->fetchAll();

    foreach ($selectedArticles as $index => &$article) {
        $article['order_quantity'] = $quantity[$index];
    }
    // Kreiramo inicijalni order
    $sql = "INSERT INTO orders (order_date, client_id ) VALUES (now(), $client)";
    "<br>";
    if ($conn->query($sql)) {
        $order_id = $conn->lastInsertId();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // TODO: Napraviti tabele orders i order_items. Skloni $order_id = 1; kada završiš.


    // za taj order kreiramo order_items i kreiramo totalnu sumu
    $total_price = 0;
    //  print_r($selectedArticles);
    foreach ($selectedArticles as $selectedArticle) {
        $procurement_items_price = (int)$selectedArticle['price'] * (int)$selectedArticle['PDV_stopa'] / 100 + (int)$selectedArticle['price'] * (int)$selectedArticle['order_quantity'];
        $total_price = $total_price + $procurement_items_price;
        $article_id = $selectedArticle['id'];
        $order_quantity = (int)$selectedArticle['order_quantity'];


        echo $sql = "INSERT INTO order_items (order_id, article_id, quantity, price ) VALUES ($order_id, $article_id ,$order_quantity , $procurement_items_price)";

        if ($conn->query($sql)) {

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    // Ažuriramo order sa totalnom sumom
    $sql = "UPDATE orders SET sum = '$total_price' WHERE id = $order_id";
    echo "<br>";
    if ($conn->query($sql)) {
        header('Location: /order/' . $order_id);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

function getOrder($id)
{
    $order = getOne('orders', $id);
    return $order;
}

function getOrdersBox()
{
    global $conn;

    $sql = "SELECT orders.id, orders.order_date, clients.name, clients.surname, orders.sum, orders.client_id  FROM orders INNER JOIN clients ON orders.client_id = clients.id ORDER BY orders.id ";
    $statement = $conn->prepare($sql);

    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $orders = $statement->fetchAll();

    return $orders;
}

function getOrderItems($order_id)
{

    global $conn;

    $sql = "SELECT o.id, a.id as order_item_id, o.article_id, a.name, a.unit_of_measure, o.quantity, a.PDV_stopa, a.price FROM order_items AS o JOIN articles a ON o.article_id = a.id  where o.order_id=$order_id ORDER BY o.id DESC";


    $statement = $conn->prepare($sql);

    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $order_items = $statement->fetchAll();

    return $order_items;
}

/**
 * @param $article_id
 * @param $quantity
 */
function addQuantity($article_id, $quantity)
{
    global $conn;

    $sql = "UPDATE articles SET quantity = quantity + $quantity where id=$article_id";

    if ($conn->query($sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

/**
 * @param $article_id
 * @param $quantity
 */
function removeQuantity($article_id, $quantity)
{
    global $conn;

    $sql = "UPDATE articles SET quantity = quantity - $quantity where id=$article_id";

    if ($conn->query($sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

/**
 * @param $order_id
 */
function finishOrder($order_id)
{
    global $conn;
    $sql = "UPDATE orders SET finished = 1 where id=$order_id";
    if ($conn->query($sql)) {
        header('Location: /order/' . $order_id);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

/**
 * @param $order_id
 */
function finishProcurement($procurement_id)
{
    global $conn;
    $sql = "UPDATE procurements SET finished = 1 where id=$procurement_id";
    if ($conn->query($sql)) {
        header('Location: /procurement/' . $procurement_id);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

/**
 *
 */
function newExam()
{
    global $conn;

    $client_id = $_POST['client_id'];
    $daljina_D_Sph = $_POST['daljina_D_Sph'];
    $daljina_D_Cyl = $_POST['daljina_D_Cyl'];
    $daljina_D_Axis = $_POST['daljina_D_Axis'];
    $daljina_D_Add = $_POST['daljina_D_Add'];
    $daljina_L_Sph = $_POST['daljina_L_Sph'];
    $daljina_L_Cyl = $_POST['daljina_L_Cyl'];
    $daljina_L_Axis = $_POST['daljina_L_Axis'];
    $daljina_L_Add = $_POST['daljina_L_Add'];
    $s_daljina_D_Sph = $_POST['s_daljina_D_Sph'];
    $s_daljina_D_Cyl = $_POST['s_daljina_D_Cyl'];
    $s_daljina_D_Axis = $_POST['s_daljina_D_Axis'];
    $s_daljina_D_Add = $_POST['s_daljina_D_Add'];
    $s_daljina_L_Sph = $_POST['s_daljina_L_Sph'];
    $s_daljina_L_Cyl = $_POST['s_daljina_L_Cyl'];
    $s_daljina_L_Axis = $_POST['s_daljina_L_Axis'];
    $s_daljina_L_Add = $_POST['s_daljina_L_Add'];
    $blizina_D_Sph = $_POST['blizina_D_Sph'];
    $blizina_D_Cyl = $_POST['blizina_D_Cyl'];
    $blizina_D_Axis = $_POST['blizina_D_Axis'];
    $blizina_D_Add = $_POST['blizina_D_Add'];
    $blizina_L_Sph = $_POST['blizina_L_Sph'];
    $blizina_L_Cyl = $_POST['blizina_L_Cyl'];
    $blizina_L_Axis = $_POST['blizina_L_Axis'];
    $blizina_L_Add = $_POST['blizina_L_Add'];
    $comment = $_POST['comment'];


    echo $sql = "INSERT INTO eye_exam (date, client_id, daljina_D_Sph, daljina_D_Cyl, daljina_D_Axis, daljina_D_Add, daljina_L_Sph,daljina_L_Cyl,daljina_L_Axis,daljina_L_Add,s_daljina_D_Sph,s_daljina_D_Cyl,s_daljina_D_Axis,s_daljina_D_Add,s_daljina_L_Sph,s_daljina_L_Cyl,s_daljina_L_Axis,s_daljina_L_Add,blizina_D_Sph,blizina_D_Cyl,blizina_D_Axis,blizina_D_Add,blizina_L_Sph,blizina_L_Cyl,blizina_L_Axis,blizina_L_Add,comment ) 
VALUES (now() , '$client_id', '$daljina_D_Sph', '$daljina_D_Cyl','$daljina_D_Axis','$daljina_D_Add','$daljina_L_Sph','$daljina_L_Cyl','$daljina_L_Axis','$daljina_L_Add','$s_daljina_D_Sph','$s_daljina_D_Cyl','$s_daljina_D_Axis','$s_daljina_D_Add','$s_daljina_L_Sph','$s_daljina_L_Cyl','$s_daljina_L_Axis','$s_daljina_L_Add','$blizina_D_Sph','$blizina_D_Cyl','$blizina_D_Axis','$blizina_D_Add','$blizina_L_Sph','$blizina_L_Cyl','$blizina_L_Axis','$blizina_L_Add','$comment')";

    if ($conn->query($sql)) {
        //$order_id = $conn->lastInsertId();
        echo "New record created successfully.";
        header('Location: /exam/' . $client_id);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

/**
 * @param $articles
 * @param $quantity
 * @param $client
 */
function saveProcurement($articles, $quantity, $client)
{
    global $conn;

    $articles = implode(',', $articles);

    $sql = "SELECT * FROM articles WHERE id IN ($articles) ORDER BY FIELD(id,$articles)";

    $statement = $conn->prepare($sql);

    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $selectedArticles = $statement->fetchAll();

    foreach ($selectedArticles as $index => &$article) {
        $article['order_quantity'] = $quantity[$index];
    }
    // Kreiramo inicijalni order
    $sql = "INSERT INTO procurements (procurement_date, client_id ) VALUES (now(), $client)";
    "<br>";
    if ($conn->query($sql)) {
        $procurement_id = $conn->lastInsertId();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // TODO: Napraviti tabele orders i order_items. Skloni $order_id = 1; kada završiš.


    // za taj order kreiramo order_items i kreiramo totalnu sumu
    $total_price = 0;
    //  print_r($selectedArticles);
    foreach ($selectedArticles as $selectedArticle) {
        $procurement_items_price = (int)$selectedArticle['price'] * (int)$selectedArticle['PDV_stopa'] / 100 + (int)$selectedArticle['price'] * (int)$selectedArticle['order_quantity'];
        $total_price = $total_price + $procurement_items_price;
        $article_id = $selectedArticle['id'];
        $procurement_quantity = (int)$selectedArticle['order_quantity'];


        $sql = "INSERT INTO procurement_items (procurement_id, article_id, quantity, price ) VALUES ($procurement_id, $article_id ,$procurement_quantity , $procurement_items_price)";

        if ($conn->query($sql)) {

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    // Ažuriramo order sa totalnom sumom
    $sql = "UPDATE procurements SET sum = '$total_price' WHERE id = $procurement_id";
    echo "<br>";
    if ($conn->query($sql)) {
        header('Location: /procurement/' . $procurement_id);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

/**
 * @param $id
 * @return mixed
 */
function getProcurement($id)
{
    $procurement = getOne('procurements', $id);
    return $procurement;
}

/**
 * @return array
 */
function getProcurementsBox()
{
    global $conn;

    $sql = "SELECT 
              p.id, 
              p.procurement_date, 
              c.name, 
              c.surname, 
              p.sum, 
              p.client_id
            FROM
              procurements AS p 
            INNER JOIN
              clients c ON p.client_id = c.id";

    $statement = $conn->prepare($sql);

    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $procurements = $statement->fetchAll();

    return $procurements;
}

/**
 * @param $procurement_id
 * @return array
 */
function getProcurementItems($procurement_id)
{

    global $conn;

    $sql = "SELECT 
              pi.id, 
              a.id AS procurement_item_id, 
              pi.article_id, 
              a.name, 
              a.unit_of_measure, 
              pi.quantity, 
              a.PDV_stopa, 
              a.price 
            FROM
              procurement_items AS pi 
            JOIN 
              articles a ON pi.article_id = a.id  
            WHERE 
              pi.procurement_id=$procurement_id
            ORDER BY 
              pi.id DESC";


    $statement = $conn->prepare($sql);

    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $order_items = $statement->fetchAll();

    return $order_items;
}