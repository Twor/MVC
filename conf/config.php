<?php
	/*默认配置*/
	define('DEFAULT_APP','login');//默认控制
	define('DEFAULT_MODEL','index');//默认方法

	/*模板文件配置*/
	define('CONTROLLER_PATH', 'libs/Controller.class.php');
	define('SMARTY_PATH', 'libs/Smarty/Smarty.class.php');
	define('TEPLS', 'tepls/');
	define('ADODB_PATH', 'libs/adodb5/adodb.inc.php');
	//define('LOGINCONTR_PATH', 'app/controllers/LoginController.class.php');
	define('MODEL_PATH', 'libs/Model.class.php');

	/*数据库配置*/
	
	define('TYPE', 'mysql');
	define('DB_NAME','test');
	define('DB_USER','root');
	define('DB_PASSWORD','twor');
	define('DB_HOST','localhost');
	define('TABLE_NAME', 't_user');

	/*模板视图文件*/
	define('JUMP_PATH', 'libs/jump/jump.html');
	define('DOLOGIN_PATH', 'tepls/templates/dologin.html');
	define('LOGIN_PATH', 'index.php');