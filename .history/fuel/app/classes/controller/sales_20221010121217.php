<?php

class Controller_Sales extends Controller_Layout
{
	public function action_exportSales() {
		Model_Sale::exportSales();
		
	}

}
