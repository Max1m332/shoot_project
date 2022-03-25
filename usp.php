<?php
     
     class Usp extends Pistols {
        
      public $silencerState = false;  
      
      function __construct($type, $damage) {
        $this->type = $type;
        $this->damage = $damage;
        
      }
      
      function reload(Magazine $magazine) {
        if ($this->type == $magazine->type) {
        $this->magazine = $magazine;
        return true;
        } else {
          echo "неподходящий тип патронов";
          return false;
          }
      }
      
      
      
      
      function switchSilencer() 
      {
       $this->silencerState = !$this->silencerState;
            if(!$this->silencerState) {
              echo 'снял глушитель<br />';
              } else {
                echo 'надел глушитель<br />';
              }
          }
        
        
      function singleShot() {
            if($this->magazine->quantity >= 1) {  
                $this->magazine->quantity -= 1;
                if($this->silencerState === false) {
                echo 'бух<br />';
                } else {
                  echo 'пук(очень тихо)<br />';
                }
              }
            }
          }
      
    
      
      