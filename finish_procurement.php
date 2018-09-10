<pre>
<?php
$articles = $_POST['articles'];
//print_r($articles);

foreach ($articles as &$article){
    $article = array_sum($article);
}



//print_r($articles);

foreach ($articles as $index=>$key){
    addQuantity($index, $key );
}

finishProcurement($_POST['order_id']);