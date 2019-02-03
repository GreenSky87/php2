<?php

namespace application\controller;

use \application\service\Service;
use \application\controller\BaseController;
use \application\model\UserModel;
use \application\model\OrderModel;

class UserController extends BaseController {

	public function before() {
		if (!$this->session->get("user")) {
			$this->request->redirect("/?path=auth/index");
		}

		parent::before();

		return true;
	}

	public static function calculate(){
		Service::request()->get("user_id");
	}

	public function action_index() {

		$user = $this->session->get("user");

		$userModel = new UserModel();
		$user = $userModel->getUserById($user["id"]);

		return $this->view->render("user/index", [
			"user" => $user
		]);
	}

	public function after() {
		//
	}

	public function action_update() {

		$user = $this->session->get("user");

		$userModel = new UserModel();
		$user = $userModel->getUserById($user["id"]);

		return $this->view->render("user/index", [
			"user" => $user
		]);
	}
	
	public function action_orders() {
        $total=0;
		$user = $this->session->get("user");

		$orderModel = new OrderModel();
		$orders = $orderModel->getUserOrders($user["id"]);
		foreach ($orders as $order)
        {
            $total=$total+$order["subtotal"];
        }
		return $this->view->render("user/orders", [
			"orders" => $orders,
            "total" => $total
		]);
	}	

}