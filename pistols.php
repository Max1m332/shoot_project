<?php

    abstract class Pistols extends Weapons {
        public function singleshot() 
        {
            if ($magazine->quantity >= 1){
                $magazine->quantity--;                
                  echo 'бух<br />';
            }    
            
        }
    } 
    