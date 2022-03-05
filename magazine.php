<?php  



class Magazine {
        public $type;
        public $quantity; 
        public $bullet; 
        public $bullet_quantity;
        public $max_quantity;

        function __construct($type, $quantity, $max_quantity) 
        {
            $this->type = $type;
            $this->quantity = $quantity;
            $this->max_quantity = $max_quantity;
        }
        
        
        
        function refill(Bullet $bullet, $bullet_quantity)
        {
            if ($this->type == $bullet->type) {
                $this->bullet = $bullet;
                if ($this->max_quantity < $this->quantity + $bullet_quantity) {
                    echo "магазин заряжен полностью, остаток патронов равен ". ($this->quantity + $bullet_quantity - $this->max_quantity);
                    $this->quantity = $this->max_quantity;
                } else {
                    $this->quantity = $this->quantity + $bullet_quantity;
                }
                return true;
            } else {
                echo 'неподходящий калибр';
                return false;
            }
        }
        
        function view() {
            echo '<pre>';
            echo 'Подходящий тип патронов для магазина: ' .$this->type.'<br>';
            echo 'Текущее количество боеприпасов в магазине: ' .$this->quantity.'<br>';
            echo 'Максимальное количество боеприпасов в магазине: ' .$this->max_quantity.'<br>';
            echo '</pre>';
        }
   
    }

