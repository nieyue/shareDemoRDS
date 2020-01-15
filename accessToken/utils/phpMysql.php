<?php
// 处理增加操作的页面 
require "dbconfig.php";



//Update('share_tb', array('expire_time' => $expire_time, 'code' => $ticket), array('id' => 2));
function update($id,$expire_time,$code){
	// 连接mysql
$link = mysqli_connect(HOST,USER,PASS,DBNAME) or die("提示：数据库连接失败！");
// 插入数据
$updateSql="UPDATE share_tb SET expire_time="."'".$expire_time."',code="."'".$code."' WHERE id=".$id;
// 更新数据
mysqli_query($link,$updateSql) or die('修改数据出错：'); 
mysqli_close($link);
}
function select($id){
	// 连接mysql
$link = mysqli_connect(HOST,USER,PASS,DBNAME) or die("提示：数据库连接失败！");
$sql = "select * from share_tb WHERE id=".$id;
$result = $link->query($sql);
$arrayresult=[];
while($row = $result->fetch_assoc()) {
	array_push($arrayresult,$row);
}
//$row = $result->fetch_assoc();
mysqli_close($link);
return $arrayresult;
}

function test(){
	return 23423;
}
?>