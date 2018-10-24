<?php
/**
 * 有效的括号
 * author:schopenhao
 * 思路：一定是成对出现。遍历一半首尾匹配
 * http://www.xx.com/leetcode/effect_bracket.php?para="{[]}"
 */
function effect_bracket($para)
{
	//判断参数合法性
	if(empty($para)){
		die('参数错误!');
	}
	$para  = str_replace('"','',$para);//去除引号
	$para  = str_split($para);//转数组
	$count = count($para);
	//判断参数合法性
	if($count % 2 > 0){
		die('false');
	}
	$half  = $count / 2;
	$bracket_arr = array('('=>')','['=>']','{'=>'}');//限定范围
	for($i=0;$i<$half;$i++){
		if(!isset($bracket_arr[$para[$i]])){//不在范围内
			die('false');
		}
		if($bracket_arr[$para[$i]] != $para[$count-$i-1]){//首尾是否对应
			die('false');
		}
	}
	die('true');
}

effect_bracket($_GET['para']);
