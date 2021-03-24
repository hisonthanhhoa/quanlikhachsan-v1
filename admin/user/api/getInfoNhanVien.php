<?php 
if(isset($_POST['id'])){
	include('../../includes/database.php');
	$query = "Select id, ten,chucvu,luong,sodienthoai,tendangnhap,gioitinh From nhanvien where gioitinh=?";
	$stmt = $con->prepare($query);
    $stmt->bind_param("i",$_POST['option']);
	$stmt->execute();
	$result = $stmt->get_result();
	if(mysqli_num_rows($result)>0){
		$row = $result->fetch_assoc();
		$row['sodienthoai'] ="0".$row['sodienthoai'];
		echo json_encode($row,JSON_UNESCAPED_UNICODE);	
	}

    print($_POST['option']);
    die();
}
 ?>