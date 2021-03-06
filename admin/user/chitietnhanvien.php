<?php
session_start();

if (isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
    include('../includes/class/nhanvien.php');
    include('../includes/database.php');
?>

    <!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js" lang="">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Xem Khách Sạn</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="../assets/scss/style.css">
        <link href="../assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/hover_css/hover-min.css">
        <!-- custom css -->
        <!-- <link rel="stylesheet" type="text/css" href="../css/layout.css"> -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">



    </head>

    <body style=>
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="./">
                        <p style="font-size: 20px;color: white;font-family: 'Roboto Condensed', sans-serif;">Khách Sạn Xịn</p>
                    </a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="../index.php" style="font-family: 'Roboto Condensed', sans-serif;"> <i class="menu-icon fa fa-dashboard"></i>Trung Tâm Quản Lí </a>
                        </li>
                        <h3 class="menu-title">Quản lí phòng</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a style="font-family: 'Roboto Condensed', sans-serif;" href="./" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Thống Kê Phòng</a>
                            <a style="font-family: 'Roboto Condensed', sans-serif;" href="taophong.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus"></i>Tạo Phòng</a>
                            <a style="font-family: 'Roboto Condensed', sans-serif;" href="regRoom.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-book"></i>Đăng Ký Phòng</a>
                        </li>


                        <h3 class="menu-title">thông tin tài khoản</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a style="font-family: 'Roboto Condensed', sans-serif;" href="../user/userlist.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Tạo Tài Khoản</a>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a style="font-family: 'Roboto Condensed', sans-serif;" href="../user/chitietnhanvien.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Danh Sách Nhân Viên</a>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">

                    <div class="col-sm-7">
                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks" style="margin-top: 10px;"></i></a>
                        <div class="header-left">
                            <button class="search-trigger"><i class="fa fa-search"></i></button>
                            <div class="form-inline">
                                <form class="search-form">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="../upload/<?php echo $avatar ?>" alt="User Avatar">
                            </a>
                            <br>
                            <a href="../includes/deletesesion.php">Thoát</a>

                        </div>
                    </div>
                </div>

            </header><!-- /header -->
            <!-- Header-->

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">
                <div class="container">
                    <p>Tất Cả Phòng Nhân Viên</p>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Họ Tên</th>
                                <th>Chức Vụ</th>
                                <th>Lương</th>
                                <th>Số Điện Thoại</th>
                                <th>Tài Khoản</th>
                                <th>Giới Tính</th>
                            </tr>
                        </thead>
                        <tbody id="table_data">
                            <?php
                            $nhanvien = new nhanvien();
                            $arrData = $nhanvien->getAllNhanVien($con);
                            foreach ($arrData as $key) {
                            ?>
                                <tr>
                                    <td><?php echo $key['id'] ?></td>
                                    <td><?php echo $key['ten'] ?></td>
                                    <td><?= $key['chucvu'] ?></td>
                                    <td><?= $key['luong'] ?></td>
                                    <td><?= $key['sodienthoai'] ?></td>
                                    <td><?= $key['taikhoan'] ?></td>
                                    <td><?php if ($key['gioitinh'] == 0) {
                                            echo 'Nữ';
                                        }
                                        if ($key['gioitinh'] == 1) {
                                            echo 'Nam';
                                        }
                                        ?></td>
                                    <td><a href="#modal-id<?php echo $key['id'] ?>" data-toggle="modal" class="btn btn-warning"> <i class="fa fa-edit"></i> Sửa</a></td>
                                    <td>
                                        <form action="#" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $key['id'] ?>">
                                            <button type="submit" class="btn btn-outline-danger" name="btnDeletenv" onclick="return confirm('Bạn chắc chắn là xoá chưa ?')"> <i class="fa fa-trash"></i> Xoá</button>
                                        </form>
                                    </td>
                                </tr>
                                <!-- BAT DAU MODAL -->
                                <div class="modal fade" id="modal-id<?php echo $key['id'] ?>">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title text-left">Sửa Nhân Viên</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method="POST" enctype="multipart/form-data">
                                                  
                                                    <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">ID</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" name="id_new" placeholder="Nhập id"  name="text" value="<?php echo $key['ID'] ?>">
                                                        <input type="hidden" class="form-control" name="id_old" placeholder="Nhập id"  name="text" value="<?php echo $key['ID'] ?>">
                                                        

                                                    </div>
                                            </div>
                                               <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Tên</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="ten" placeholder="Nhập Tên" value="<?php echo $key['ten'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">chức vụ</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="chucvu" id="chucvu" class="form-control" rows="3"><?php echo $key['chucvu'] ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Lương</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="luong" id="luong" class="form-control" rows="3"><?php echo $key['luong'] ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Số Điện Thoại</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="sodienthoai" id="sodienthoai" class="form-control" rows="3"><?php echo $key['sodienthoai'] ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Tài Khoản</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="taikhoan" id="taikhoan" class="form-control" rows="3"><?php echo $key['taikhoan'] ?></textarea>
                                                    </div>
                                                </div>
                                               
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Giới tính</label>
                                                    <div class="col-sm-10">
                                                        <select name="gioitinh">
                                                            <option value="0">Nữ</option>
                                                            <option value="1">Nam</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </div>


                                                    <button type="submit" class="btn btn-primary offset-md-2" name="edinhanvien"><i class="fa fa-edit"></i> Đồng Ý</button>
                                                </form> <!-- .END FORM -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- KET THUC MODAL -->
                            <?php } ?>
                            <!-- EDIT -->
                            <?php
                            if (isset($_POST['editnhanvien'])) {
                                $ten = $_POST['ten'];
                                $chucvu = $_POST['chucvu'];
                                $luong = $_POST['luong'];
                                $sodienthoai = $_POST['sodienthoai'];
                                $tendangnhap =$_POST['taikhoan'];
                                $pass =$_POST['pass'];
                                $gioitinh = $_POST['gioitinh'];
                                $nhanvien1 = new nhanvien();
                               
                                $nhanvien1->updatenhanvien($con, $_POST['id_old']);
                                echo '<script type="text/javascript">
                                                    window.location="./"; 
                                        </script>';
                                echo '<script>alert("Thành Công");window.location="./chitietnhanvien.php";</script>';
                            }
                            if (isset($_POST['btnDeletenv'])) {
                                $id = $_POST['id'];
                               
                                    $nhanvien->deletenhanvien($con, $id);
                                    echo '<script>alert("Thành Công");window.location="./chitietnhanvien.php";</script>';
                                
                            }

                            ?>
                            <!-- END EDIT -->
                        </tbody>
                    </table>
                </div> <!-- .content -->
            </div><!-- /#right-panel -->
            <!-- Right Panel -->

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/main.js"></script>


            <script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>

            <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
            <script src="../https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
            <script src="../assets/js/plugins.js"></script>
            <script src="../assets/js/main.js"></script>


            <script src="../assets/js/lib/chart-js/Chart.bundle.js"></script>
            <script src="../assets/js/dashboard.js"></script>
            <script src="../assets/js/widgets.js"></script>
            <script src="../assets/js/lib/vector-map/jquery.vmap.js"></script>
            <script src="../assets/js/lib/vector-map/jquery.vmap.min.js"></script>
            <script src="../assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
            <script src="../assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>



    </body>

    </html>
<?php } ?>