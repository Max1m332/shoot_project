<?php

    

     class Bullet {
       
        public $damage; 
        public $type; 
    
        function __construct($type, $damage) {
            $this->type = $type;
            $this->damage = $damage;
           }
    }