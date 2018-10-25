<?php
/**
 * 最长公共前缀
 * author:schopenhao
 * http://www.xxx.com/leetcode/public_prefix.php?para=["flower","flow","flight"]
 */
function public_prefix($para){
	//判断参数合法性
	if(empty($para)){
		die('参数错误!');
	}
	$para = json_decode($para,1);
	$size = count($para);
	
	//判断参数合法性
	if($size < 2){
		die('至少输入两个参数!');
	}

	$fix_size = strlen($para[0]);
	$pub_fix = '';

	for($j=1;$j<=$fix_size;$j++){
		for($i=1;$i<$size;$i++){
			if(strpos($para[$i],substr($para[0],0,$j)) === false){//注意判断条件
				break 2;
			}
		}
		$pub_fix = substr($para[0],0,$j);
	}
	
	
	echo '【最长公共前缀为】：'.$pub_fix;
}

public_prefix($_GET['para']);