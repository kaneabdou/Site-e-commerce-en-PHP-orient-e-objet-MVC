<?php

   /**
   * 
   */
   class ProduitManager extends Model
   {
   	
      public function getProduit(){

          $this->getBdd();

          return $this->getAll('Produit','Produit');//En parametre on a la table article et l'objet qu'on va creer Produit

      }

      
   }

?>