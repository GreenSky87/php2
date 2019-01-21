<?php
//з
class A {
    public static function test(){
        self::who();
    }
    public static function who(){
        echo __CLASS__;
    }
}

class B extends A {

    public static function who(){
        echo __CLASS__;
    }
}

B::test();
//з
abstract class A {

    public  $id;
    public function getId(){
        return $this->id;
    }
    abstract  protected function getName();
}
class B extends A {
    protected function getName(){
        return $this->name;
    }
}
$b = new B;
//з
interface A {
    public function __construct();
    public function foo($id);
}

interface B {
    public function bar();
}

interface C extends B,A{
    public function buzz();
}

class TEST2 {}
class Test extends Test2 implements C {
    public function __construct();
    public function foo($id){
        echo "A";
    }
    public function bar(){
        echo "B";
    }
    public function buzz(){
        echo "C";
    }
}
Test::foo();

class Count implements Countable
{
    public function count(){
        return count($this->statuses);
    }
}
abstract  class Basemodel {
    protected $connection;
    public function  __construct($dsn)
    {
    }
    abstract function insert($row);
    abstract function update($id,$value);
}
class UserMoel extends Basemodel {
    public function insert($row);
    public function update($id,$value);
}
$usermodel =new UserMoel($dsn);

/*magic*/
class A {
    private $id;
    private $name;

    public function __get($property){
        if (property_exists($property)){
            return $this->$property;
        }
        throw new Exception();
    }
    public function __set($property, $value){
        if (property_exists($property)){
            $this->$property=$value;
        }
    }
}
$a= new A;
$a->id=1;

//proverka
class OtherClass {}
Class A {
    public function foo (OtherClass $obj) {

    }
    public function isValid (int $status): bool {
        return isset($this->statuses($status));
    }
}
$obj= new OtherClass();
$a = new A;
$a->foo($obj);
$a->foo([1,2,3]);

//
//App/Main/MyClass.php
namespace App\Main;
class Main {
    function hello(){
        return "abc";
    }
}

//index.php

namespace App\Main;
require_once "App\Main;\MyClass.php"
$obj = new \App\Main;\MyClass;
$obj->hello();

//
trait PlusNumber {
    public function doAction($number){
        return $number*2;
    }
}

class Math {
    use PlusNumber;
    function run($number){
        return $this->doAction($number);
    }
}

$a= new Math;
echo $a->run(6);

class Singlton {
    private static $instance;
    private function  __construct (){}
    private function  __clone(){}
    private function getInstance(){
        if (!isset (self::$instance)){
            self::$instance=new self();
        }
    }
}
Singlton::getInstance()->run();


//// Подсчет в корзине
/// abstract class ProductA {
//    protected static $income;
//
//    abstract protected function getValue($price);
//}
//class ProductB extends ProductA {
//    protected function getValue($price) {
//        return $this->price;
//    }
//
//    public $id1;
//    public $id2;
//
//    public function foo() {
//        $this->id1 = 2; $this->id2 = 3;
//        $pro=$this->id1*$this->id2;
//
//
//        parent::$income=parent::$income+$pro;
//        echo parent::$income;
//    }
//}
//
//class ProductC extends ProductA {
//    protected function getValue($price) {
//        return $this->price;
//    }
//
//    public $id1;
//    public $id2;
//
//    public function foo() {
//        $this->id1 = 1; $this->id2 = 3;
//        $pro=$this->id1*$this->id2;
//
//
//        parent::$income=parent::$income+$pro;
//        echo parent::$income;
//    }
//}
//class Cart extends ProductA {
//    protected function getValue($price) {
//        return $this->price;
//    }
//
//    public $id1;
//    public $id2;
//
//    public function cartsell() {
//      echo 'Итоговая цена='.parent::$income;
//    }
//
//}
//
//
//$b1 = new ProductB();
//$c1 = new ProductC();
//$d1 = new Cart();
//echo $b1->foo().'<br>';
//echo $b1->foo().'<br>';
//echo $b1->foo().'<br>';
//echo $c1->foo().'<br>';
//echo $d1->cartsell().'<br>';


?>