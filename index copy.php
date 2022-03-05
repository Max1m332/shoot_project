<?
  require_once 'bullet.php';
  require_once 'weapon.php';
  require_once 'pistols.php';
  require_once 'rifles.php';


 class Pistol {
    public $magazine;

 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 class usp  {
   
  public $magazine = 12;
  public $silencerState = false;

  function switchSilencer() {
    $this->silencerState = !$this->silencerState;
    if(!$this->silencerState) {
      echo 'снял глушитель<br />';
      } else {
        echo 'надел глушитель<br />';
      }
  }

  function shoot() {
    $this->magazine--;
    if($this->silencerState === false){
      echo 'бух<br />';
    } else {
      echo 'пук(очень тихо)<br />';
    }
  }

  function check_magazine() {
    echo $this->magazine;
  }
}

$usp = new usp();
$usp -> shoot();
$usp -> switchSilencer();
$usp -> shoot();
$usp -> switchSilencer();
$usp -> shoot();
echo '<br />';
echo $usp -> $magazine;
$usp -> check_magazine();
$usp->lohgalimi();
