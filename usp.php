<?php
     
     class Usp extends Pistols {
        
      public $silencerState = false;  
      
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
            if($magazine->quantity >= 1) {
                $magazine->quantity -= 1;
                if($this->silencerState === false) {
                echo 'бух<br />';
                } else {
                  echo 'пук(очень тихо)<br />';
                }
              }
            }
          }