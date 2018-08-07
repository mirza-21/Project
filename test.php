<?php
include("conection.php");

$sql=mysqli_query($con,"SELECT * FROM `riseonex_leadership_group_count` WHERE  id=5");
$val=mysqli_fetch_array($sql);
//print_r($val);
//echo $val['count'];
$main_ar = explode(",",$val['count']);
$avl = ''; 
foreach($main_ar as $item) {
	echo '<td><b>RAMAKANTA BEHERA</b><br>ramu999<br> Group - 0</td>';
	$sub_arr = explode(":",$item);
	echo $sub_arr[0].'-----'.$sub_arr[1];
	$avl = ''; 
	if($sub_arr[0] == 'true') { 
		$avl = 'checked="checked"'; 
	}
	echo '<input type="checkbox" value=""'.$avl.'>'.'<br>';
}
?>


