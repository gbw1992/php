//1.链接数据库
$mysqli = new mysqli('localhost','root','root');
//2.选择数据库
$mysqli -> select_db('NAME');
//3.如果链接错误显示错误信息
if($mysqli->connect_errno){

}
