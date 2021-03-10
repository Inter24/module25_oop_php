<?php


//INTERACE 

interface AutoAbility
{
    public function moveForward();
    public function moveBack();  
}

interface AutoSpecial extends AutoAbility
{
    public function moveCrane();  
}

interface AutoLight extends AutoAbility
{
    public function nitro();  
    public function signal();  
    public function dvorniki();  

}


//CLASS BLOCK

abstract class Auto implements AutoAbility
{     
    public function moveForward()
    {
        echo $this->distance;
    }
    public function moveBack()
    {
        echo $this->distance;
    }

}

// AUTO

class Tank extends Auto
{
    public function shoot()
    {
        
    }
}

class Light extends Auto
{
    private $distance = 'distance';
    private $value = 'value';
    public  $color = 'color';
    public  $weight = 'weight';
    public  $price = 'price'; 

    public function moveForward()
    {
       
    }

    public function nitro()
    {
    
    }

    public function signal()
    {
    
    }

    public function dvorniki()
    {
    
    }  

}

class Buldozer extends Auto
{
    private $distance = 'distance';
    private $angle = 'angle';

    public function moveBack()
    {
    
    }

    public function moveCrane()
    {

    }
}

//PRINT DATA

$car = new Light();
$buldozer = new Buldozer();

function moveCar(AutoLight $car) {
    $car->moveForward();
    $car->nitro();
    $car->signal();
    $car->dvorniki();
}

function moveBuldozer(AutoSpecial $buldozer) {
    $buldozer->moveBack();
    $buldozer->moveCrane();
}


?>