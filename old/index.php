<?php

class Weapon {

    public $bullet;
    public $damage;
    public $quantity;

    function __construct($bullet, $damage) {
        $this->bullet = $bullet;
        $this->damage = $damage;
    }

    function check_magazine() {
        echo "в магазине $this->bullet патронов<br />";
    }

    function reload($quantity) {
        $this->bullet = $quantity;
        
    }

    function singleShot() {
        if ($this->bullet >= 1){
        $this->bullet--;
        echo '*выстрел*<br />';
        }
          else {
              echo '*кончились патроны*<br />';
          };
     }
}


class Pistols extends Weapon {

}


class Rifle extends Weapon {

    public $shot_per_sec;
    public $patrons;

    
    function __construct($bullet, $damage, $shot_per_sec) {
        $this -> bullet = $bullet;
        $this -> damage = $damage;
        $this -> shot_per_sec = $shot_per_sec;
    }
    
    
    // function automaticShot($second_time) 
    //     }
    // }
   

    //         else {for ($i = $this->patrons; $i == 0, $i--) 
    //             $this->singleShot();
    //         }
    //     }
        
    function autoShots($second_time) {
        $this->patrons = $second_time * $this->shot_per_sec;
        // echo $this->patrons;
        
        
        if ($this->patrons >= $this->bullet) {
            for ($i = $this->bullet; $i > 0; $i--) {
                $this->singleShot(); 
            }
        }
        else {
            for ($i = $this->patrons; $i > 0; $i--) {
                $this->singleShot(); 
            }
        }
    }
        
        
       

        
    }

    class Bullet {
        function __construct($massa, $type) {
            $this->massa = $massa;
            $this->type = $type;
    }


}




class Usp extends Pistols {

}

$usp = new Usp(12, 20);


class Famas extends Rifle {

}

$famas = new Famas(25,25,4);


$famas->autoShots(5);
$famas->check_magazine();
$famas->reload(25);
$famas->check_magazine();



function russianroulette() {
    $barabane = [1,0,0,0,0,0];
    shuffle($barabane);
    if ($barabane[0] == 1) {
        echo 'ты умер<br />';
    }
    else echo 'повезло<br />';
}

echo russianroulette();
