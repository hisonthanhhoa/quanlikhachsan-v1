<?php 
if(isset($_POST['sophong'])){
	include('../../includes/database.php');
	$query = "Select ten,chucvu,luong,sodienthoai,tendangnhap,pass,gioitinh From nhanvien";
	$stmt = $con->prepare($query);
	$stmt->execute();
	$result = $stmt->get_result();
	if(mysqli_num_rows($result)>0){
		$row = $result->fetch_assoc();
		$row['sodienthoai'] ="0".$row['sodienthoai'];
		echo json_encode($row,JSON_UNESCAPED_UNICODE);	
	}

}
 ?>