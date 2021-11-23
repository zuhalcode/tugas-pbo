<?php 

require_once 'Vehicle_abstract.php';
require_once 'Interface.php';

class RiverBarge2 extends Vehicle implements Sailer
{
    public function __construct($maxLoad, $name)
    {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }

    public function calcFuelNeeds()
    {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();

        echo $this->name . ' membutuhkan bahan bakar sebanyak ';
        
        return ceil($fuel /= $trip);
    }

    public function dock()
    {
        return $this->name . ' berada di dermaga';
    }
    
    public function cruise()
    {
        return $this->name . ' sedang berlayar';
    }
}

class SeaPlane extends Airplane2 implements Sailer
{
    public function __construct($maxLoad, $name)
    {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }

    public function calcFuelNeeds()
    {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();

        echo $this->name . ' membutuhkan bahan bakar sebanyak ';
        
        return ceil($fuel /= $trip);
    }

    public function dock()
    {
        return $this->name . ' berada di dermaga';
    }
    
    public function cruise()
    {
        return $this->name . ' sedang berlayar';
    }
}

class Helicopter extends Airplane2 
{
    public function __construct($maxLoad, $name)
    {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }

    public function calcFuelNeeds()
    {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();

        echo $this->name . ' membutuhkan bahan bakar sebanyak ';
        
        return ceil($fuel /= $trip);
    }
}

$riverBarge2 = new RiverBarge2(30000, 'Atomic');
$seaPlane = new SeaPlane(20000, 'Titanic');
$helicopter = new Helicopter(10000, 'Brocklyn');