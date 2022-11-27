<?php
include_once("eat_connect.php");

//eat의 데이터 가져오기
$sql = "SELECT * FROM eat";

$result = $conn->query($sql);

if(isset($result) && $result->num_rows >0){
  while($row = $result->fetch_assoc()){
    echo "이름은 :".$row['user']."<br>";
    echo "날짜는 :".$row['date']."<br>";
    echo "아침은 :".$row['breakfast']."<br>";
    echo "점심은 :".$row['lunch']."<br>";
    echo "저녁은 :".$row['dinner']."<hr>";
  }
} else echo "검색된 데이터가 없습니다.";



 ?>
