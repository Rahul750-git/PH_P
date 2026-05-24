<?php

class Properties
{
  public $name = 'ram';
  function getname()
  {
    echo $this->name;
  }
  function update()
  {
    echo $this->name = 'Shyam';
  }
}
$p1 = new Properties();
$p1->getname();
$p1->update();

?>