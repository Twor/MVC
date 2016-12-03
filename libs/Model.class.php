<?php
	class Model{
		private $ado = null;

		public function __construct(){
			$this->ado = &ADONewconnection(TYPE);
			$this->ado->Connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		}
		public function queryAll($sql,$arr,$where){
			if (empty($where)) {
				$this->ado->Execute($sql);
			}else{
				$sql .= ' where ';
				$arrK = array_values($arr);
				$arrV = implode('=? and ',$arrK);
				$arrV .= '=?';
				$sql .= ' '.$arrV;
				echo $sql;
				$rs = $this->ado->Execute($sql,$where);
				var_dump($rs);
			}
		} 
	}