<?php
function getData($con, $res){
  if(mysqli_num_rows($res) > 0){
		$data = array();
		while($row = mysqli_fetch_assoc($res)){
			$data[] = $row;
		}
		$jsonData = json_encode($data);
		echo $jsonData;
	} else echo null;
}
?>