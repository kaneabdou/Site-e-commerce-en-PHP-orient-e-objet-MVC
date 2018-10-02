<?php

   class ControllerAccueil

   {
        
          private $_produitManager;
          private $_view;

          function __construct($url){

             

                   $this->lesProduits();
          }
          
          private function lesProduits(){

          	$this->_produitManager= new ProduitManager();
              
              $produits=$this->_produitManager->getProduit();

                   require_once('Views/viewAccueil.php');

          }
   }

?>