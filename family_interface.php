<?php

//Отец
interface Father
{
    public function age(int $age);
    public function wife();
}

//Мать
interface Mother
{
    public function age(int $age);  
    public function husband();

}

//Ребенок
interface Child extends Father, Mother
{
    public function age(int $age);
    public function sex();
}


// Общий
class Family implements Father, Mother, Child
{
    public $hobby = 'skating';
    public $tvprogram = '2x2';

    public function age(int $age)
    {

    }

    public function sex()
    {

    }

    public function husband()
    {

    }

    public function wife()
    {

    }

    public function peopleCount(int $count)
    {

    }

}


$family = new Family;
print_r(class_implements($family));
var_dump($family);


?>