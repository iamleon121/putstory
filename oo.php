<?php
class PlayerC{

  var $NM;

  var $PS;
  var $AC;
  var $IN;
  var $TE;
  var $ME;
  var $MA;
  var $PH;
  var $EC;
  var $PC;
  var $LO;
/*
  function __construct( $par1, $par2, $par3, $par4, $par5, $par6, $par7, $par8, $par9, $par10, $par11) {
   
   $this->NM = $par1;

   $this->PS = $par2;
   $this->AC = $par3;
   $this->IN = $par4;
   $this->TE = $par5;
   $this->ME = $par6;
   $this->MA = $par7;
   $this->PH = $par8;
   $this->EC = $par9;
   $this->PC = $par10;
   $this->LO = $par11;
  }
*/
  function a(){
    echo "a";
  }

}

class PlayerJ{

  var $NM;

  var $PS;
  var $AC;
  var $IN;
  var $TE;
  var $ME;
  var $MA;
  var $PH;
  var $EC;
  var $PC;
  var $LO;

  
}

$player=new PlayerJ;
$player->NM = "Leon";
$player->PS = 3;
$player->AC = array(1,0,1);


$j = json_encode($player);
echo $j;

$servername = "mysql.coding.io";
$username = "user-6byJzmbbaU";
$password = "X,N{z~,T&UGp9Ex]7bLD";
$dbname = "db-Ua0oP228Mx";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";

$jb;
$sql = "SELECT * FROM players WHERE name='fio'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "name:" . $row["name"]. "<br>";
        $jb=$row["data"];
        echo $jb;
    }
} else {
    echo "0 结果";
}





$p=json_decode($jb);

print_r($p);

 $p->AC[1]=1;

$jb = json_encode($p);

$sql = "UPDATE players SET data='$jb' WHERE name='fio'";
$conn->query($sql);
//$file=fopen("./welcome.txt","x+");
//$file = fopen("test.txt","w");
//echo fputs($file,"good")."ok";
//fclose($file);


//$file = fopen("test.txt","r");
//echo fgets($file);
//fclose($file);
//$conn->close();
?>