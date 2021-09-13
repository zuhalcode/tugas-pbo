<?php 

class Numbers{
    public $positive, $even, $value;
}

class Numbering{
    public $start,$range,$amount;
    public function __construct($start,$range,$amount)
    {
        $this->start = $start;
        $this->range = $range;
        $this->amount = $amount;
    }

    public function display(){
        $i=0; 
        $j=0;
        $avg=0;
        while($i <= $this->amount -1){
            echo $this->start += $j . " ";
            $i++; 
            $j = $this->range;
            $avg += $this->start;
        }               
        return "<h1>Average = ". $avg / $this->amount ."</h1>";
    }
}

class Novel 
{
    protected $title, $publisher, $publicate;
    private   $modal;

    public function __construct($title, $publisher, $publicate, $modal)
    {
        $this->title = $title;
        $this->publisher = $publisher;
        $this->publicate = $publicate;
        $this->modal = $modal;
    }

    public function getPrice(){
        return $this->modal - 20/100 * $this->modal;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getPublisher(){
        return $this->publisher;
    }

    public function getPublicate(){
        return $this->publicate;
    }
}
