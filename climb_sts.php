<?php
/**
 * title:爬楼梯  
 * desc：
   假设你正在爬楼梯。需要 n 阶你才能到达楼顶。
   每次你可以爬 1 或 2 个台阶。你有多少种不同的方法可以爬到楼顶呢？
   this is test!
   zai ci ceshi
   xx
 * author:schopenhao
 * http://www.xxx.com/leetcode/climb_sts.php?n=128
 */
 
//动态规划（1.构建状态记录数组  2.状态转移方程）
function climb_sts($n){
	$dp = array();//状态记录数组
	if($n == 0){
		die('参数不合法!');
	}
	$dp[1] = 1;
	$dp[2] = 2;
	if($n == 1 || $n == 2){
		echo $n;die;
	}else{
		for($i = 3;$i <= $n;$i++){
			$dp[$i] = $dp[$i-1] + $dp[$i-2];//状态转移方程
		}
		echo $dp[$n];die;
	}
	
}

climb_sts($_GET['n']);

