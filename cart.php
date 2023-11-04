<?php 
require 'inc/head.php';
require 'inc/data/products.php';
?>

<section class="cookies container-fluid">
    <div class="row">
    <?php

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {

    foreach ($_SESSION['cart'] as $cookie) {
        $productId = array_search($cookie, $catalog);

        echo '<h3>' . $cookie['name'] . '</h3>';
    }
} else {
    echo '<p>Votre panier est vide.</p>';
}

        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
