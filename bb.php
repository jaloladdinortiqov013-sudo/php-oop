<?php

Class car {
    public $name ;
    public $color;
    public $year;
    public $madel;

    function __construct ($name , $color, $year,$madel){
       $this->name =$name;
       $this->color=$color;
       $this->year=$year;
       $this->madel=$madel;
}

function yban(){
        echo "mashinani nomi " .$this->name."rangi".$this->color."ishlab chiqarilgan yili".$this->year."madeli".$this->madel;
}
};





$porsh = new car ('porsh', 'qizil', 2016, 'p90');
$porsh->yban();