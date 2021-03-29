<?php 
	if(isset($_POST['fullname']) && isset($_POST['chucvu'])&& isset($_POST['sodienthoai'])){
		require('./lib/database.php');
		// get ten,chucvu,sodienthoai 
		$ten = $_POST['fullname'];
        $chucvu = $_POST['chucvu'];
		$sodienthoai=$_POST['sodienthoai'];
		//check
		$query = "Select ten,chucvu,sodienthoai From `nhanvien` Where ten=? and chucvu=? and sodienthoai=?";
		$stmt = $con->prepare($query);
		$stmt->bind_param("sss",$ten,$chucvu,$sodienthoai);
		$stmt->execute();
		$result = $stmt->get_result();
		$countRow = mysqli_num_rows($result);
		if($countRow > 0){
			session_start();
			$_SESSION[''] = "";
			echo 1 ;
		}else{
			echo 0;
		}

	}
 ?>