<?php
class htmlModel extends model{
	public $base;
	public function __construct(&$base){
		parent::__construct($base);
		$this->base=$base;
		$this->table="html";
	}
	
	public function type_list(){
		return array(
			1=>"固定数据"
		);
	}
	
	public function getWord($word){
		$word=addslashes($word);
		return $this->selectRow(array("where"=>" word='".$word."' AND bstatus=2 " ));
	}
}

?>