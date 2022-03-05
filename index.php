<?php
      require_once 'bullet.php';
      require_once 'weapons.php';
      require_once 'pistols.php';
      require_once 'rifles.php';
      require_once 'usp.php';
      require_once 'magazine.php';

$bullet_9mm = new Bullet('9mm', 20);

//$usp_magazine_1 = new Magazine('9mm', 12, 12);

//$aaa->refill($bullet, 12);

$usp_magazine_2 = new Magazine('9mm', 5, 12);

$usp_1 = new usp();

$usp_magazine_2->refill($bullet_9mm, 8);

$usp_magazine_2->view();

