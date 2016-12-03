<?php
	/**
	* 
	*/

	class Controller
	{
		private $view = null;
		public function __construct()
		{
			$this->view = new Smarty();
			$this->view->template_dir = 'TEPLS/templates/';
			$this->view->compile_dir = 'TEPLS/templates_c/';
			$this->view->config_dir = 'TEPLS/configs/';
			$this->view->cache_dir = 'TEPLS/cache/';
		}
		public function assgin($name,$value){
			$this->view->assgin($name,$value);
		}
		public function display($name){
			$this->view->display($name);
		}
		public function jump($url,$msg,$time = 3,$watetime=0){
			$this->view->assign('url',$url);
			$this->view->assign('msg',$msg);
			$this->view->assign('time',$time);
			$this->view->assign('watetime',$watetime);
			$this->view->display(JUMP_PATH);
		}
	}