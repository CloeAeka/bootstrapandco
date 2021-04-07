<?php 
class products extends Controller {

	function example() {
		$this->loadModel('products_model');
		$data = $this->products_model->test();
		$this->set(["data" => $data]);
		$this->render('product_page_example');
	}
//no push
	function index() {
		$this->loadModel('products_model');
		$data1 = $this->products_model->get_product_by_cat(1);
		$data2 = $this->products_model->get_product_by_cat(2);
		$this->set(["data1" => $data1]);
		$this->set(["data2" => $data2]);
		$this->render('index');
	}

	function get_products(){

		$this->render('product_page');

	}

	function product($product_id){
		$this->loadModel('products_model');
		$data = $this->products_model->get_product($product_id);
		$pourcentage = (100-$data['prix_promo']*100/$data['prix']);
		$this->set(["pourcentage"=> $pourcentage]); 
		$this->set(["data" => $data]);
		$this->render('product_page');
	}

}