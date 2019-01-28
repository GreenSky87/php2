<?php

namespace Classes;
use PDO;


class Application {

	private $view;

	public function __construct(View $view) {
		$this->view = $view;
	}


	public function example1() {
		$name 		= 'Clark Kent'.$user['email']; //$_POST["name"];
		$username 	= "ckent"; //$_POST["username"];
		$password 	= "password"; //$_POST["password"];
        $loggin = 'yes';
        $logodir = 'img/index/logo.png';
        $menu = require ROOT_DIR.'./engine/menu_builder.php';
        $pageH1 = 'Магазин одежды BRAND';
        $users = $user['email'];
        /*if (!$this->isValid($name)) {
			throw new Exception("We have troubles with ".$name, 500);
		}*/

		$this->view->render("index", array(
            'logodir' => $logodir,
		    'name' 		=> $name,
			'username' 	=> $username,
			'password' 	=> $password,
            'menu' 	=> $menu,
            'title' => $pageH1,
            'user' => $users,
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
    public function example4() {

        // подключение к бд
        try {
            $dbh = new PDO('mysql:dbname=shop;host=localhost', 'root', '');
        }
        catch (PDOException $e)
        {
            echo "Error: Could not connect. " . $e->getMessage();
        }

        $sql = "SELECT * from gallery where tip_gallery='gal_top'";
        $sth = $dbh->query($sql);
        while ($row = $sth->fetchObject()) {
            $data[] = $row;
        }
        $sql2 = "SELECT * from gallery where tip_gallery='gal_bottom'";
        $sth2 = $dbh->query($sql2);
        while ($row2 = $sth2->fetchObject()) {
            $data2[] = $row2;
        }
        $this->view->render("gallery1p", array(
            'images' => $data,
            'images2' => $data
        ));
        $this->view->render("gallery2p", array(
         'images2' => $data2
        ));

    }

}