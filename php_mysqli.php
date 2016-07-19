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
