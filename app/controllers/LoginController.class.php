<?php
	class LoginController extends Controller{
		public function index(){
			$this->display('login.html');
		}
		public function doLogin(){
			$model = new Model();
			//var_dump($conn);
			$username = $_POST['username'];
			$password = $_POST['password'];
			// echo $username;
			// echo $password;
			$sql = "select * from t_user";
			$arr = array("username",'password');
			$where = array($username,$password);
			$row = $model->queryAll($sql,$arr,$where);
			var_dump($row);
		}
	}