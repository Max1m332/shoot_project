<?php

    class Rifles extends Weapons {
        
        public $type;
        public $damage;
        public $fire_rate;
        
        
        public function __construct($type, $damage, $fire_rate, Magazine $magazine)
        {
            $this->type = $type;
            $this->damage = $damage;
            $this->fire_rate = $fire_rate;
        }
    
        public function fire_all_magazine() 
        {
            if ($magazine->quantity >= 1) {
            for ($i = $magazine->quantity; $i >= 1; $i--) {
                return "пух<br>";
                }
            } else 'цк, цк, цк, цк';

            echo 'была произведена автоматная очередь длительностью '. ($magazine->quantity / $fire_rate);
    
        }
    }