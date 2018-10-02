
<?php
   
  foreach ($produits as $produit): ?> 
  <h2><?php $produit->id()?></h2>
  <h3><?php $produit->designation() ?></h3>
  <h3><?php $produit->prix() ?></h3>
  <h3><?php $produit->content() ?></h3>


<?php endforeach;?>

