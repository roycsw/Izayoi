<?php
	/*$connect = mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("test", $connect);
	
	
	$que = mysql_query("SELECT * FROM `bw_vote` WHERE `create_date` > 1412028000 ORDER BY `bw_vote`.`photo_num` DESC",$connect);
	while ($fetch_a = mysql_fetch_array($que)) {
		mysql_query("UPDATE `bw_shares` SET `shares` = `shares`-1 WHERE `index`={$fetch_a['photo_num']}", $connect);
		echo $fetch_a['photo_num'].' ';
	}*/
	
	
	/*if (($handle = fopen("marilyn.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 10, ",")) !== FALSE) {
			$r = rand(1,75);
			//mysql_query("UPDATE `articles` SET `visits`={$data[1]}+$r WHERE `id`={$data[0]}", $connect);
			echo "UPDATE `articles` SET `visits`={$data[1]}+$r WHERE `id`={$data[0]}".';';
			
		}
		fclose($handle);
	}*/
	
	/*$prize_point = array();
	
	for($i = 1; $i <=19500; $i++){
		$prize_point[] = 10;//array_push($prize_point,10);
	}
	for($i = 1; $i <= 7500; $i++){
		$prize_point[] = 20;
	}
	for($i = 1; $i <= 2400; $i++){
		$prize_point[] = 50;
	}
	for($i = 1; $i <= 600; $i++){
		$prize_point[] = 100;
	}
	shuffle($prize_point);
	echo "INSERT INTO `hola_o02_prize` ( `prize_point` ) VALUES";
	for($i = 0; $i <=count($prize_point); $i++){
		//mysql_query("INSERT INTO hola_o02_prize(prize_point) VALUES($prize_point[$i])", $connect);
		echo "('$prize_point[$i]'),";
	}
	*/
	//echo (time() > strtotime('2014/07/01/ 10:00') ? 'alert("OAO")' : 'go()');
	echo strtotime('2014/09/30/ 00:00');
	
	//phpinfo();
	/*$types = array();
	$temp = array('a'=>0,'b'=>0,'c'=>0);
	foreach($types as $value){
		switch ($value){
		case 1:
			$temp[0]++;
			break;
		case 2:
			$temp[1]++;
			break;
		case 3:
			$temp[2]++;
			break;
		}
	}
	//$temp = array('a'=>2,'b'=>2,'c'=>3);
	echo array_search(max($temp),$temp);*/
	
	
	/*
	mysql_query("DELETE FROM `paul_joe_mday` WHERE `subscribe`='1'", $connect);
	for($i = 1; $i <= 67; $i++){
		$temp = rand(1,2991);
		if(mysql_fetch_array(mysql_query("SELECT `id` FROM `paul_joe_mday` WHERE (`id`=$temp AND `device`='PC')", $connect)))
			mysql_query("UPDATE `paul_joe_mday` SET `id`=$temp+10000 WHERE `id`=$temp", $connect);
		else $i--;
	}
	for($j = 1; $j <= 38; $j++){
		$temp = rand(1,2991);
		if(mysql_fetch_array(mysql_query("SELECT `id` FROM `paul_joe_mday` WHERE (`id`=$temp AND `device`='mobile')", $connect)))
			mysql_query("UPDATE `paul_joe_mday` SET `id`=$temp+10000 WHERE `id`=$temp", $connect);
		else $j--;
	}
	mysql_query("DELETE FROM `paul_joe_mday` WHERE `id`<10000", $connect);
	*/
	
	/*
	$que = mysql_query("SELECT `id`,`create_date` FROM `paul_joe_mday` ORDER BY `id` ASC", $connect);
	$i = 1;
	while ($fetch_a = mysql_fetch_array($que)) {
		$temp = $fetch_a['create_date'];
		if($i <= 17){
			while($temp < 1397750400){
				$temp = $temp + 86400;
			}
			while($temp > 1397836800){
				$temp = $temp - 86400;
			}
		}elseif($i <= 48 && $i > 17){
			while($temp < 1397836800){
				$temp = $temp + 86400;
			}
			while($temp > 1397923200){
				$temp = $temp - 86400;
			}
		}else{
			while($temp < 1397923200){
				$temp = $temp + 86400;
			}
			while($temp > 1398009600){
				$temp = $temp - 86400;
			}
		}
		mysql_query("UPDATE `paul_joe_mday` SET `create_date`=$temp WHERE `id`={$fetch_a['id']}", $connect);
		$i++;
	}
	*/
	
/*	
$('input[name="sex"]')[1].checked = true;
$("input[name='child']:checked").attr('class')
$("#sb1").click(function(){
   var method =$("input[name='sex']:checked").val(); //radio 取值，注意寫法
   if( typeof(method) == "undefined"){ // 注意檢查完全沒有選取的寫法，這行是精華
   alert( "請選取操作方式！");
   return false;
}*/
?>