<?php

class evenChecker{
	var $first,$last,$x;
	function asign($a,$b){
		$this->first=$a;
		$this->last=$b;
	}
	function write(){
		for($x=$this->first;$x<=$this->last;$x++){
			if($x%2==0){
				echo "$x <br/>";
			}
		}
	}
}

?>