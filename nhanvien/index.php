<?php session_start() ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kiếm Tra Thông Tin</title>
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
</head>
<style>
	

html,body
{
    width: 500px;
    margin: auto;
}
.container
{
    width: 500px;
    margin: 20px auto;
}

.preview
{
    padding: 10px;
    position: relative;
}

.preview i
{
    color: white;
    font-size: 35px;
    transform: translate(50px,130px);
}

.preview-img
{
    border-radius: 100%;
    box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.7);
}

.browse-button
{
    width: 200px;
    height: 200px;
    border-radius: 100%;
    position: absolute; /* Tweak the position property if the element seems to be unfit */
    top: 10px;
    left: 132px;
    background: linear-gradient(180deg, transparent, black);
    opacity: 0;
    transition: 0.3s ease;
}

.browse-button:hover
{
    opacity: 1;
}

.browse-input
{
    width: 200px;
    height: 200px;
    border-radius: 100%;
    transform: translate(-1px,-26px);
    opacity: 0;
}

.form-group
{
    width:  250px;
    margin: 10px auto;
}

.form-group input
{
    transition: 0.3s linear;
}

.form-group input:focus
{
    border: 1px solid crimson;
    box-shadow: 0 0 0 0;
}

.Error
{
    color: crimson;
    font-size: 13px;
}

.Back
{
    font-size: 25px;
}
</style>
<body>
    <div class="container">
       <div class="Back">
            <i class="fa fa-arrow-left" onclick="Back()"></i>
        </div>
        <p class="h2 text-center">Kiểm Tra Thông Tin Nhân Viên</p>
        <form action="" method="post">
            <div class="preview text-center">
                <img class="preview-img" src="http://simpleicon.com/wp-content/uploads/account.png" alt="Preview Image" width="200" height="200"/>
                <div class="browse-button">
                    <i class="fa fa-pencil-alt"></i>
                   
                </div>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Họ Tên:</label>
                <input class="form-control" type="text" name="ten" required placeholder="Nhập Họ Tên"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Chức vụ:</label>
                <input class="form-control" type="text" name="chucvu" required placeholder="Nhập chức vụ"/>
                <span class="Error"></span>
            </div>

			<div class="form-group">
                <label>Số Điện Thoại:</label>
                <input class="form-control" type="text" name="sodienthoai" required placeholder="Nhập Số Điện Thoại"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Giới Tính:</label><br/>
                <label><input type="radio" name="gioitinh" required value="Nam" checked /> Nam</label>
                <label><input type="radio" name="gioitinh" required value="Nữ" /> Nữ</label>
                
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value="Kiểm Tra "/>
            </div>
        </form>
    </div>
	<script>
		function Back()
	{
		window.history.back();
	}
	</script>
		<script >
		$('#submit').click(function(e) {
				var ten = $('#ten').val();
				var chucvu = $('#chucvu').val();
				var sodienthoai =$('#sodienthoai').val();

			$.ajax({
				url: 'kiemtrataikhoan.php',
				type: 'POST',
				dataType: 'text',
				data: {ten: fullname,chucvu:chucvu, sodienthoai: sodienthoai},
				success : function(data){
					if(data==1){
						var log = `<div class="modal fade" id="modal-1">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-body">
												<div class="cssload-thecube" style="margin-bottom: 15px">
													<div class="cssload-cube cssload-c1"></div>
													<div class="cssload-cube cssload-c2"></div>
													<div class="cssload-cube cssload-c4"></div>
													<div class="cssload-cube cssload-c3"></div>
												</div>
												<p style="text-align: center;color: #1487B7;font-size: 20px">thông tin chính xác!!!</p>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->`;
						$('.info').html(log);
						$("#modal-1").modal('show');
						setTimeout(function(){
							window.location="nhanvien/index.php";
						},3000)
					}else{
						var errorLog = "<p>Thông tin không chính xác !</p>";
						$('.info').html(errorLog);
					}
				}
			})
		});
	</script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>