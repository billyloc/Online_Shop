<?php 
ob_start();
/* Include Header */
Include('header.php');
/* Include Header */
 ?>	

<?php 

/* Include Cart item if it is not empty Section */
count($product->getData('cart')) ? include('Template/_cart-template.php') : include('Template/notFound/_cart-not-found.php');
/* Include Cart item if it is not empty Section */

/* Include Wishlist item if it is not empty Section */
count($product->getData('wishlist')) ? include('Template/_wishlist-template.php') : include('Template/notFound/_wishlist-not-found.php');
/* Include Wishlist item if it is not empty Section */


/* Include New Phones Section */
include('Template/_new-phones.php');
/* Include New Phones Section */


 ?> 



<?php 
/* Include Footer */
include('footer.php');
/* Include Footer */
 ?> 