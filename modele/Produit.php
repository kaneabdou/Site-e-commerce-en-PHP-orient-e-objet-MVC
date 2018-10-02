<?php

  class Produit{

    private $_id;
    private $_designation;
    private $_prix;
    private $_content;
  
           public function __construct(array $data)


           {


           	    $this->Hydrate($data);
   
           }


           public function Hydrate($data)

           {
                 
                 foreach ($data as $key => $value) {
                 	
                 	$method= 'set'.ucfirst($key);
                 	if (method_exists($this, $method)){
                 		
                 		$this->$method($value);
                 	}
                 }
                
           }

           //SETTERS
                public function setId($id){
                   
                    $this->_id=$id;

                }

                public function setDesignation($design){
                   
                    $this->_designation=$design;

                }


                public function setPrix($prix){
                   
                    $this->_prix=$prix;

                }


                public function setContent($content){
                   
                    $this->_content=$content;

                }


           //GETTERS

  
                public function designation(){

                   	 return $this->_designation;
                   
                 }

                 public function id(){

                   	 return $this->_id;
                   
                 }

                 public function prix(){

                   	 return $this->_prix;
                   
                 }

                 public function content(){

                   	 return $this->_content;
                   
                 }

  }

?>