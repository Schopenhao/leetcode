<?php
/**
 * title:二进制求和
 * desc：
   给定两个二进制字符串，返回他们的和（用二进制表示）
 * author:schopenhao
 * http://www.xxx.com/leetcode/bin_system.php?a="111011"&b="110011"  
 */
function bin_system($a,$b){
	if(empty($a) || empty($b)){
		die('参数错误！');
	}

	$a = str_replace('"','',$a);
	$b = str_replace('"','',$b);
	
	$a_len = strlen($a);
	$b_len = strlen($b);
	
	if($a_len > $b_len){//b左端补0
		for($i=0;$i<$a_len-$b_len;$i++){
			$b = '0'.$b;
		}
	}elseif($a_len < $b_len){//a左端补0
		for($i=0;$i<$b_len-$a_len;$i++){
			$a = '0'.$a;
		}
	}

	$a = str_split($a);//转数组
	$b = str_split($b);
	$c_a = count($a);
	$sum = array();
	$flag = 0;//进位标志
	for($i=$c_a-1;$i>=0;$i--){//倒序循环每位相加
		if($a[$i] + $b[$i] + $flag == 2){
			$sum[$i] = 0;
			$flag = 1;
		}elseif($a[$i] + $b[$i] + $flag == 3){
			$sum[$i] = 1;
			$flag = 1;
		}else{
			$sum[$i] = $a[$i] + $b[$i] + $flag;
			$flag = 0;
		}

	}
	
	ksort($sum);
	$str = implode('',$sum);
	if($flag == 1){//进位溢出判断
		$str = '1'.$str;
	}
	
	print_r($str);

}

bin_system($_GET['a'],$_GET['b']);

