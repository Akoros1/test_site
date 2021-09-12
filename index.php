<?php
interface FlyBehavior{
  public function fly();
}
class FlyWithWings implements FlyBehavior{
  public function fly(){
    return 'Ya letayu)))0)';
  }
}
class FlyNoWay implements FlyBehavior{
  public function fly(){
    return 'Ne letayu(((0(';
  }
}
class Duck{
  public $flyBehavior;

  public function performFly(){
    return $this->$flyBehavior->fly();
  }
}
class MallardDuck extends Duck{
  function __construct(){
    $this->$flyBehavior = new FlyWithWings();
  }
}
class RubberDuck extends Duck{
  function __construct(){
    $this->$flyBehavior = new FlyNoWay();
  }
}
function polet(Duck $duck){
  return $duck->performFly();
}
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <button type="button" name="button" onclick="alert('<?php echo polet(new MallardDuck())?>')">Дикая утка</button><p></p>
    <button type="button" name="button" onclick="alert('<?php echo polet(new RubberDuck())?>')">Резиновая уточка</button>
  </body>
</html>
