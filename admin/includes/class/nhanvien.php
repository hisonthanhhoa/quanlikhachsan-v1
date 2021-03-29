<?php

/**
 * Class quan li nhan vien
 */
class nhanvien
{
	public $infoUser = array();
	public $ten;
	public $chucvu;
	public $luong;
	public $sodienthoai;
	public $tendangnhap;
	public $pass;
	public $gioitinh;


	// khoi tao array thong tin nhan vien
	function creatInfoUser($ten, $chucvu, $luong, $sodienthoai, $tendangnhap, $pass, $gioitinh)
	{
		$arr = array("ten" => $ten, "chucvu" => $chucvu, "luong" => $luong, "sodienthoai" => $sodienthoai, "tendangnhap" => $tendangnhap, "pass" => $pass, "gioitinh" => $gioitinh);
		return $arr;
	}

	function khoitaoUser($infoUser, $ten, $chucvu, $luong, $sodienthoai, $tendangnhap, $pass, $gioitinh)
	{
		$this->infoUser = $infoUser;
		$this->$ten = $ten;
		$this->$chucvu = $chucvu;
		$this->$luong = $luong;
		$this->$sodienthoai = $sodienthoai;
		$this->$tendangnhap = $tendangnhap;
		$this->$pass = $pass;
		$this->$gioitinh = $gioitinh;
	}



	//Insert doi tuong vao DB
	function insertDB($con)
	{
		// chuan bi du lieu insert
		$ten = $this->infoUser['ten'];
		$chucvu = $this->infoUser['chucvu'];
		$luong = $this->infoUser['luong'];
		$sodienthoai = $this->infoUser['sodienthoai'];
		$tendangnhap = $this->infoUser['tendangnhap'];
		$pass = $this->infoUser['pass'];
		$gioitinh = $this->infoUser['gioitinh'];

		// tien hanh insert
		$query = "INSERT INTO `nhanvien`(`ten`, `chucvu`, `luong`, `sodienthoai`, `tendangnhap`, `pass`, `gioitinh`) VALUES (?,?,?,?,?,?,?)";
		$stmt = mysqli_prepare($con, $query);
		$stmt->bind_param("ssissss", $ten, $chucvu, $luong, $sodienthoai, $tendangnhap, $pass, $gioitinh);
		$stmt->execute();
	}

	function getAllNhanVien($con){
		$arrData = array();
		$query = "Select * From nhanvien";
		$result = mysqli_query($con,$query);
		while($row=mysqli_fetch_assoc($result)){
			$id = $row['id'];
			$ten = $row['ten'];
			$chucvu = $row['chucvu'];
			$luong = $row['luong'];
			$sodienthoai = $row['sodienthoai'];
			$taikhoan = $row['tendangnhap'];
			$gioitinh = $row['gioitinh'];
			$arrTmp = array("id"=>$id,"ten"=>$ten,"chucvu"=>$chucvu,"luong"=>$luong, "sodienthoai"=>$sodienthoai, "taikhoan"=>$taikhoan, "gioitinh"=>$gioitinh);
			array_push($arrData,$arrTmp);
		}
		return $arrData;
	}
	// UPDATE nhanvien
	function updatenhanvien($con,$id){
		$query = "UPDATE nhanvien SET `id`=?,`ten`=?,`chucvu`=?,`luong`=?,`sodienthoai`=?,`tendangnhap`=?,`pass`=? ,`gioitinh`=? WHERE id=?";
		$stmt = $con->prepare($query);
		$stmt->bind_param("ississsi",$this->id,$this->ten,$this->chucvu,$this->luong,$this->sodienthoai,$this->tendangnhap,$this->pass,$this->gioitinh, $id);
		$stmt->execute();
	}
	// xoa nhanvien
	function deletenhanvien($con,$id){
		$query = "DELETE FROM `nhanvien` WHERE id = ?";
		$stmt = mysqli_prepare($con,$query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
	}
}
