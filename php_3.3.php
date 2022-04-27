<?
abstract class Country{
  protected $slogan;
  function sayHello() {}
  public function getSlogan() { 
    return $this->slogan;
  }
  public function setSlogan($slogan) {
    $this->slogan = $slogan;
  }
}
trait Active {
  public function defineYourself() {
    return get_class($this);
  }
}

interface Boss {
  public function checkValidSlogan();
}

class EnglandCountry extends Country implements Boss {
  use Active;
  public function sayHello(){
    return ("Hello");
  }

  public function checkValidSlogan() {
    return (strpos(" ".$this->slogan, "England") or strpos(" ".$this->slogan, "English"));
  }
}
class VietnamCountry extends Country implements Boss
{
  use Active;
  public function sayHello()
  {
    return ("Xin chao");
  }

  public function checkValidSlogan()
  {
    return (strpos(" " . $this->slogan, "Vietnam") or strpos(" " . $this->slogan, "Vietnamese"));
  }
}
$englandCountry = new EnglandCountry();
$vietnamCountry = new VietnamCountry();

$englandCountry->setSlogan('England is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest.');
$vietnamCountry->setSlogan('Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world .');

var_dump($englandCountry->sayHello()); // Hello
echo "<br>";
var_dump($vietnamCountry->sayHello()); // Xin chao
echo "<br>";
var_dump($englandCountry->checkValidSlogan()); // true
echo "<br>";
var_dump($vietnamCountry->checkValidSlogan()); // false

echo 'I am ' . $englandCountry->defineYourSelf();
echo "<br>";
echo 'I am ' . $vietnamCountry->defineYourSelf();
