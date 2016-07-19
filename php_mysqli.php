//1.链接数据库
$mysqli = new mysqli('localhost','root','root');
//2.选择数据库
$mysqli -> select_db('NAME');
//3.如果链接错误显示错误信息
if($mysqli->connect_errno){
  die('connect error'.$mysqli->connect_error);
}
//指定编码方式
$mysqli->set_charset('utf-8');
//执行sql查询
$sql = <<<EOF
  CREATE TABLE IF NOT EXISTS mysqli(
    id TINYINT UNSIGNED AUTO_INCREMENT KEY,
    username VARCHAR(20) NOT NULL;
  );
EOF;
$sql = "";
//执行单条sql语句
$res = $mysqli->query($sql); 
var_dump($res);

//关闭链接
$mysqli->close();


//sql语句更新语句
$sql = "UPDATE user SET age=10";
//sql删除语句
$sql = "DELETE user WHERER age=10";

//输出有多少条语句被影响
 //输出-1语句有有问题
$mysqli->affected_rows; 

//查询数据
$sql = "SELECT id,username,age FROM user";
$res = $mysqli->query($sql);
if($res && $mysqli_result->num_rows>0){
  $rows = $res->fetch_all();
}else{
  echo'error';
}

