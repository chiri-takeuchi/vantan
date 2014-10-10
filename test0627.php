<?php

$array = array(
	array("名前" => "宮史郎","年齢" => "74","職業" => "歌手"),
	array("名前" => "ミック・ジャガー","年齢" => "84","職業" => "歌手"),
	array("名前" => "猫ひろし","年齢" => "54","職業" => "芸人"),
	array("名前" => "フィデル・カストロ","年齢" => "84","職業" => "革命家")
);
?>
<table>
 <tr>
  <th>名前</th><th>年齢</th><th>職業</th>
 </tr>
<?php
foreach($array as $key => $user){
	print("<tr>");
	print("<td>" . $user["名前"] . "</td>");
	print("<td>" . $user["年齢"] . "</td>");
	print("<td>" . $user["職業"] . "</td>");
	print("</tr>");
}
?>
