<?php
//задание 1-4
class Product{
    public $id;
    public $tip;
    //Cвойства
    function __construct($id, $tip){
        $this->id = $id;
        $this->tip = $tip;    }
    // Метод для вывода
    function view(){
                echo "<h3>Тип одежды $this->tip</h3><br>";
    }

}

class Tip extends Product
{
    public $fabric;
    public $trademark;
    public $product_name;
    public $color;
    public $price;
    //Будут отличатся по названию, цене, цвету, марке и производителю
    //производитель и марка
    function view_tip($trademark,$fabric) {

        echo "<p>Марка $trademark</p><br>";
        echo "<p>Производитель $fabric</p><br>";}
    //название вещи, цена и цвет
    function view_object($product_name,$color,$price)
    {
        echo "<p>Название одежды $product_name</p><br>";
        echo "<p>Цвет одежды $color</p><br>
                <p>Цена одежды $price</p>";
    }
}


class object_sale extends Tip {
    public $product_name;
    public $color;
    public $price;

}
$a = new Tip (1, 'Blazer');
$b = new object_sale (1, 'Blazer');
$a->view();
$a->view_tip('Zara', 'China');
$a->view_object('Fantasia', 'white','8$');

//задание 5
/*
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A(); //создана переменная А1, присвоен класс А
$a2 = new A(); //создана переменная А2, присвоен класс А
$a1->foo(); //1 изначально $x=0 и вызывая функцию увеличивается на 1 = $a1=0+1;
$a2->foo(); //2 т.к. класс один и переменная $x статичная, то вызывая ее даже с другой переменной ($a2) бедет прибавлятся к уже
// обработанной в памяти $x  =  $a2=$a1+1;
$a1->foo(); //3 $a1=$a2+1;
$a2->foo(); //4 $a2=$a1+1;
*/

//задание 6-7
/*
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A(); //создана переменная А1, присвоен класс А
$b1 = new B(); //создана переменная b1, присвоен класс B (который хоть и является наследуемым, но создает статичную переменную для своего класса)
$a1->foo(); //1 $a1=0+1;
$b1->foo(); //1 $b1=0+1;
$a1->foo(); //2 $a1=$a1+1;
$b1->foo(); //2 $b1=$b1+1;
*/


?>