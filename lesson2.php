<?php

//домашнее задание

/*1. Создать структуру классов ведения товарной номенклатуры.
а) Есть абстрактный товар.
б) Есть цифровой товар, штучный физический товар и товар на вес.
в) У каждого есть метод подсчета финальной стоимости.
г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза. У штучного товара обычная стоимость,
у весового – в зависимости от продаваемого количества в килограммах. У всех формируется в конечном итоге доход с продаж.
д) Что можно вынести в абстрактный класс, наследование?*/

abstract class Product{

    protected  $id; //id
    protected $tip; //тип товара
    protected $fabric; //страна производитель
    protected $trademark; // марка производителя
    protected $product_name; //торговое название товара
    protected $color; //цвет товара
    protected $price; //цена товара в $
    protected $weight; //вес товара в кг
    protected static $income;

    function __construct($id, $tip,$trademark,$fabric,$product_name,$color,$price,$weight){
        $this->id = $id;
        $this->tip = $tip;
        $this->fabric = $fabric;
        $this->trademark = $trademark;
        $this->product_name = $product_name;
        $this->color = $color;
        $this->price = $price;
        $this->weight = $weight;}

    abstract protected function getValue($price);

     protected function sfw($price,$weight){
        $sfw=$this->getValue($price)/$this->weight;
        return $sfw;
    }
    function sellforweight($price,$weight) {

        return "Цена товара за кг=".$this->sfw($price,$weight).'$'. "\n";
    }


}

//Продажа товара по весу
class Product_for_weight extends Product {
    protected $sell_weight;
    protected function getValue($price) {
        return $this->price;
    }
    public function getSell_weigh($price,$sell_weigh){
        return "Стоимость товара при весе 24 кг=".$pfw=($this->sfw($price,$weight)*$sell_weigh).'$'. "\n";
    }
    public function foo($price,$sell_weigh) {
        parent::$income=parent::$income+($this->sfw($price,$weight)*$sell_weigh);
        return parent::$income;
    }
}
//Продажа товара поштучно
class Product_for_one extends Product {
    protected $sell_count;
    protected function getValue($price) {
        return $this->price;
    }
    public function getSell_count($price,$sell_count){
        return "Стоимость товара при покупке 20 штук=".$pfo=($this->getValue($price)*$sell_count).'$'. "\n";
    }
    public function foo($price,$sell_count) {
        parent::$income=parent::$income+($this->getValue($price)*$sell_count);
        return parent::$income;
    }
}
//Продажа цифрового_товара
class Product_for_virtual extends Product {
    protected $sell_countV;
    private $sellvirt;
    protected function getValue($price) {
        return $this->price;
    }
    public function getSell_countV($price,$sell_countV){
        $this->selvirt = $selvirt;
        $selvirt=0.5;
        return "Стоимость товара при покупке 20 штук виртуально=".$pfv=($this->getValue($price)*$sell_countV*$selvirt).'$'. "\n";
    }
    public function foo($price,$sell_countV) {
        $this->selvirt = $selvirt;
        $selvirt=0.5;
        parent::$income=parent::$income+($this->getValue($price)*$sell_countV*$selvirt);
        return parent::$income;
    }
}
class CartProduct extends Product {
    protected function getValue($price) {
        return $this->price;
    }

    public function cartsell2() {
        echo 'Итоговая цена='.parent::$income;
    }

}
echo '<br><br>';
$b = new Product_for_weight(1, 'Blazer','Zara', 'China','Fantasia', 'white','8','2.5');
$сobra = new Product_for_one(2, 'Sweets','Zarina', 'China','Makaroshki', 'black_and_green','2.71','0.5');
$gadyka = new Product_for_virtual(3, 'Book','Geotar', 'Russia','Byka', '','13.1','0.5');

echo '<br><br><br><br><br><br><br><br><br><br>';
echo $b->sellforweight($price,$weight).'<br>';
echo $b->getSell_weigh($price, 24).'<br>';
$b->foo($price, 24);
echo $сobra->getSell_count($price,20).'<br>';
$сobra->foo($price, 20);
echo $gadyka->getSell_countV($price,20).'<br>';
$gadyka->foo($price,20);
$d1 = new CartProduct(0, '0','0', '0','0', '0','2','0');;
echo $d1->cartsell2().'<br>';

?>