<?php


class products{
    
    public $id;
    public $name;
    public $price;
    
    public function __construct(int $id,$name, $price){

        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
       

    }

    public function getFormattedPrice(){
    return number_format("$this->price",2);
    }
    public function showDetails(){
        
        echo "PRODUCT details:\n ";
        echo "-ID: {$this->id}\n";
        echo "-Name: {$this->name}\n";
        echo "-Price: $" . $this->getFormattedPrice() . PHP_EOL;
    }
}
$obj= new products(1,"T-SHIRT",19.66);
$obj->showDetails();