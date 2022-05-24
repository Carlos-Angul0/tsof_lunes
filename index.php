<?php
class RouterViews{
	public function __construct(){
		$view = 'login';
		if(isset($_REQUEST['url'])){
			$view = $_REQUEST['url'];
		}
		require 'views/'.$view.'.html';
	}
}

$objeto = new RouterViews();