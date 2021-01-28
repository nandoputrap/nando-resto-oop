<?php
class Menu {
    // enkapsulasi dengan membuat class tidak dapat diakses publik
    private $name;
    private $price;
    private $image;
    private $orderCount = 0;

    // construct akan otomatis dijalankan apabila ada instance baru
    public function __construct($name, $price, $image) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
    // getter agar dapat mengakses kelas private
    public function getName(){
        return $this->name;
    }

    public function getImage(){
        return $this->image;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getOrderCount() {
        return $this->orderCount;
    }
    
    // setter
    public function setOrderCount($orderCount) {
        $this->orderCount = $orderCount;
    }

    public function getTotalPrice() {
        return $this->getPrice() * $this->orderCount;
    }


}

?>