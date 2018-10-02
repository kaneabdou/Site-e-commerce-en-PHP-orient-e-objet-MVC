<?php

  abstract class Model{

         private static $_bdd;


         private static function setBdd(){

              self::$_bdd= new PDO ('mysql:host=localhost;dbname=Boutique;charset=utf8','root','root');
              echo "reussi";

              self::$_bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

         }

          protected function getBdd(){

          	if (self::$_bdd==null) 
              
          		
          		$this->setBdd();
          		return self::$_bdd;
          	}

          	   
          


        //Afficher tous les produits
         protected function getAll($table,$obj){

           $tab=[]; 
           $req=self::$_bdd->prepare("SELECT * FROM ".$table." ORDER BY id desc");
           
           $req->execute();
               while ($data=$req->fetch(PDO::FETCH_ASSOC)) {
               	
                      $tab[]= new $obj($data);
                      return $tab;
                      $req->closeCursor();

               }
                    
         }
  }



?>