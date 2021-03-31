<?php 
	if(isset($_POST['tendangnhap']) && isset($_POST['matkhau'])){
		require('./lib/database.php');
		// get username,password 
		$tendangnhap = $_POST['tendangnhap'];
		$pass = $_POST['matkhau'];
		//check
		$query = "Select tendangnhap,pass From `user` Where tendangnhap=? and pass=?";
		$stmt = $con->prepare($query);
		$stmt->bind_param("ss",$tendangnhap,$pass);
		$stmt->execute();
		$result = $stmt->get_result();
		$countRow = mysqli_num_rows($result);
		if($countRow > 0){
			
			echo 1 ;
		}else{
			echo 0;
		}

	}
 ?>