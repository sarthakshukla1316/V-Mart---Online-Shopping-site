<?php
    // include header section
    include('header.php');
?>

<?php

    // include cart template section
    count($product->getData('wishlist')) ? include('Template/_wishlist_template.php') : include('Template/notFound/_wishlist_notFound.php');
    // include cart template section

    // include new phones section
    include('Template/_new-phones.php');
    // include new phones section

?>

<?php
    // include footer section
    include('footer.php');
?>