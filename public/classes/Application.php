<?php

namespace Classes;

class Application {

	private $view;

	public function __construct(View $view) {
		$this->view = $view;
	}

    public function title_name1() {

        $pageH1 = 'Магазин одежды BRAND';

        $this->view->render("header", array(
            'title' => $pageH1
        ));

    }

	public function example1() {
		$name 		= "Clark Kent"; //$_POST["name"];
		$username 	= "ckent"; //$_POST["username"];
		$password 	= "password"; //$_POST["password"];
        $logodir = 'img/index/logo.png';
        $menu = require ROOT_DIR.'./engine/menu_builder.php';

		/*if (!$this->isValid($name)) {
			throw new Exception("We have troubles with ".$name, 500);
		}*/

		$this->view->render("index", array(
            'logodir' => $logodir,
		    'name' 		=> $name,
			'username' 	=> $username,
			'password' 	=> $password,
            'menu' 	=> $menu,
		));
	}

	public function example2() {

		$num = rand (0,30);
		$div = ($num % 2);

		$this->view->render("numbers", array(
			'num' => $num,
			'div' => $div
		));		

	}	

	public function example3() {

		$items = [
			"book"=>"a",
			"car"=>"b"
		];

		$this->view->render("list", array(
			'items' => $items
		));		

	}	

}