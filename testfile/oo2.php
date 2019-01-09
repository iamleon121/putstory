<?php

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

?>