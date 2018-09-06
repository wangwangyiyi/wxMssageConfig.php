<?php
defind('TOKEN',123456);
/**
* 微信连接服务器配置测试
*/
class wxObj extends 
{
	function valid()
	{
		$echostr = $_GET['echostr'];
		if(!$this->checkwx()){
			echo $echostr;
		}
	}
	checkwx()
	{
		$signature = $_GET["signature"];
		$timeStamp = $_GET['timeStamp'];
		$nonce =  $_GET["nonce"];
		$token = TOKEN;
		$tmpArr = array($token,$timeStamp,$nonce);
		sort($tmpArr,SORT_STRING);
		$tmpArr = implode($tmpArr);
		$tmpArr = sha1($tmpArr);
		if($tmpArr == $signature){
			return true;
		}else{
			return false;
		}
	}
}
$obj = new wxObj();
$obj->valid();
?>