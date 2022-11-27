<?php
//connect.php 파일 가져오기
include_once("eat_connect.php");

#form 데이터 읽기
$user = $_POST["user"];
$date = $_POST["date"];
$breakfast = $_POST["breakfast"];
$lunch = $_POST["lunch"];
$dinner = $_POST["dinner"];

#insert sql 작성
echo "<h3>추가할 사용자 이름은 {$user}, 날짜는{$date}, 아침시간은 {$breakfast}, 점심 시간은 {$lunch}, 저녁 시간은 {$dinner}</h3>";

$sql = "INSERT INTO eat(user,date,breakfast,lunch,dinner) VALUES('$user','$date','$breakfast','$lunch','$dinner')";

if($conn->query($sql))echo "<h3>식사 시간 등록 성공</h3>";
else echo "<h3>식사 시간 등록 실패</h3>";

 ?>
