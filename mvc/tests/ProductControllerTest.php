<?php

namespace tests;

use tests\BaseTest;
use application\controller\HomeController;

final class ProductControllerTest extends BaseTest{

	public function testIndex() {

		$controller = new ProductController();
		
		$output = $this->request("GET", $controller, "action_index");
		$expected = "<tr>
			<th>Id</th>
			<th>Name</th>
			<th></th>
		</tr>";
		
		$this->assertContains($expected, $output);
	}	

	public function testCategory(){
		$userModel = new CategoryModel();
		$categoryWithProducts = $categoryModel->getCategoryWithProducts(1);
		$this->assertEquals(array(), $user); 
		$this->assertNotEquals(null, $user);
	 }

	public function testShow(){
		$goodsModel = new GoodsModel();
		$product = $goodsModel->getById($id);
		$this->assertEquals(array(), $user); 
		$this->assertNotEquals(null, $user);
	 }
	public function testShow(){
		$basketModel = new BasketModel();
		$result = $basketModel->create(1, 1);
		$this->assertEquals(array(), $user); 
		$this->assertNotEquals(null, $user);
	 }

}
