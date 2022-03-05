<?php

    abstract class Weapons {
        
        function __construct($type, $damage, $firing_rate) 
        {
            $this->type = $type;
            $this->damage = $damage;
            $this->firing_rate = $firing_rate; 
        }
        
        public function reload()  //change magazine
        {

        }
    }