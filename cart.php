<?php
    // include header section
    include('header.php');
?>

<?php

    // include cart item section if it is not empty
    count($product->getData('cart')) ? include('Template/_cart-template.php') : include('Template/notFound/_cart_notFound.php');    
    // include cart item section if it is not empty

    // include new phones section
    include('Template/_new-phones.php');
    // include new phones section

?>

<?php
    // include footer section
    include('footer.php');
?>