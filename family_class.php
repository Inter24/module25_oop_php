<?php

// Общий
abstract class Family
{
    public $hobby = 'skating';
    public $tvprogram = '2x2';

    public function peopleCount(int $count)
    {

    }

    protected function agePrint()
    {       
        echo $this->age;
    }

}

//Отец
class Father extends Family
{
    protected $age = 30;
    protected $wife = 'wifename';

    public function wife()
    {
        echo $this->wife;
    }

}

//Мать
class Mother extends Family
{
    protected $age = 30;
    protected $husband = 'husbandname';    

    public function husband()
    {
        echo $this->husband;
    }

}

//Ребенок
class Child extends Family
{
    protected $age = 10; 
    
    public function sex()
    {

    }
}


$mother = new Father();
$father = new Mother();
$child = new Child();

var_dump($mother);
var_dump($father);
var_dump($child);


?>