<?php
	/*
	*外部文件入口，这有这一个
	*/
	include 'conf/config.php';
	include CONTROLLER_PATH;
	include SMARTY_PATH;
	include ADODB_PATH;
	include MODEL_PATH;
	
	date_default_timezone_set('PRC');
	if (!isset($_GET['ap'])) {
		$app = DEFAULT_APP;
	}else{

		$app = $_GET['ap'];
	}
	if (!isset($_GET['md'])) {
		$model = DEFAULT_MODEL;
	}else{
		$model = $_GET['md'];
	}
	// $app = isset($_GET['ap'])?$_GET['ap']:DEFAULT_APP;
	// $app = isset($_GET['md'])?$_GET['md']:DEFAULT_MODEL;

	function Myautoload($name){

		//echo $name;
		$classType1 = substr($name, -10);
		$classType2 = substr($name, -5);
		// echo $classType1;
		// echo $classType2;
		$loadDir = '';
		if ($classType1 == 'Controller') {
			$loadDir = './app/controllers/';
		}elseif ($classType2 == 'Model') {
			$loadDir = './app/models/';
		}
		$loadPath = $loadDir.$name.'.class.php';
		//echo $loadPath;
		if (file_exists($loadPath)) {
			require_once($loadPath);
		}else{
			die($loadPath.'文件不存在');
		}
		
	}
	//spl_autoload_register — 注册给定的函数作为 __autoload 的实现
	spl_autoload_register("Myautoload");
	//echo "你现在使用的是".$app."调用的是".$model."<br/>";
	$classname = ucfirst($app).'Controller';
	//echo $classname;
	if (class_exists($classname)) {
		$index = new $classname();
		if (method_exists($index, $model)) {
			$index->$model();
		}else{
			echo '没有找到'.$model.'方法,请查看自定义文件';
		}
	}else{
		echo '不存在'.$classname.'类,请查看自定义文件';
	}
	// $index = new ReflectionClass($classname);
	// //var_dump($index)
	// $indexobj = $index->newInstanceArgs(array());
	// $Method = new ReflectionMethod($classname,$model);
	// $Method->invokeArgs($indexobj,array());