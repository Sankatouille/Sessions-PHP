<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<?php

if(!isset($_SESSION['loginname'])){
    header('Location: /' );
}


?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
            if(!isset($_SESSION['panier']) || count($_SESSION['panier']) === 0) {
                echo "<div>Votre panier est vide</div>";
            }else{
                foreach(array_unique($_SESSION['panier']) as $cookie_id){
                    echo "<div>".$catalog[$cookie_id]['name']."</div>";
                    }
                }
        
        ?>   

    </div>
</section>
<?php require 'inc/foot.php'; ?>
