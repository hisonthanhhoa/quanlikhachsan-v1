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
        <title>Xem Nhân Viên</title>
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
                            <a href="index.php" style="font-family: 'Roboto Condensed', sans-serif;"> <i class="menu-icon fa fa-dashboard"></i>Trung Tâm Quản Lí </a>
                        </li>
                        <h3 class="menu-title">Quản lí phòng</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a style="font-family: 'Roboto Condensed', sans-serif;" href="./" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Thống Kê Phòng</a>
                            <a style="font-family: 'Roboto Condensed', sans-serif;" href="taophong.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus"></i>Tạo Phòng</a>
                            <a style="font-family: 'Roboto Condensed', sans-serif;" href="regRoom.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-book"></i>Đăng Ký Phòng</a>
                        </li>


                        <h3 class="menu-title">thông tin tài khoản</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a style="font-family: 'Roboto Condensed', sans-serif;" href="../user/userlist.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i> Tạo Tài Khoản</a>
                        </li>
                        
                        <li class="menu-item-has-children dropdown">
                            <a style="font-family: 'Roboto Condensed', sans-serif;" href="../user/userlist.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i> Danh Sách Nhân Viên</a>
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
                    <p>Tạo user mới</p>
                    <form method="POST" action="#" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Tên nhân viên</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ten" name="ten" placeholder="Nhập tên nhân viên">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">chức vụ</label>
                            <div class="col-sm-10">
                                <textarea name="chucvu" id="chucvu" class="form-control" rows="3" required="required"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">Lương</label>
                            <div class="col-sm-10">

                                <textarea name="luong" id="luong" class="form-control" rows="3" required="required"></textarea>

                            </div>
                        </div>

                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Số điện thoại</label>
                    <div class="col-sm-10">
                        <textarea name="sodienthoai" id="sodienthoai" class="form-control" rows="3" required="required"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Tên Đăng Nhập</label>
                    <div class="col-sm-10">
                        <textarea name="tendangnhap" id="tendangnhap" class="form-control" rows="3" required="required"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Pass</label>
                    <div class="col-sm-10">
                        <textarea name="pass" id="pass" class="form-control" rows="3" required="required"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">giới tính</label>
                    <div class="col-sm-10">
                        <select name="gioitinh">
                            <option value="0">Nữ</option>
                            <option value="1">Nam</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button name="btnSubmit" type="submit" class="btn btn-info">Đồng Ý</button>
                    </div>
                </div>
                </form>
                <!-- xu li insertDB -->
                <?php
                if (isset($_POST['btnSubmit'])) {
                    // khoi tao obj person
                    $person = new nhanvien();

                    // lay thong tin nguoi thue tu form
                    $ten = $_POST['ten'];
                    $chucvu = $_POST['chucvu'];
                    $luong = $_POST['luong'];
                    $sodienthoai = $_POST['sodienthoai'];
                    $tendangnhap = $_POST['tendangnhap'];
                    $pass = $_POST['pass'];
                    $gioitinh = $_POST['gioitinh'];
                    $infoPerson = $person->creatInfoUser($ten, $chucvu, $luong, $sodienthoai, $tendangnhap, $pass, $gioitinh); // createPerson

                    $person->khoitaoUser($infoPerson, $ten, $chucvu, $luong, $sodienthoai, $tendangnhap, $pass, $gioitinh);
                    $person->insertDB($con);
                }

                ?>
            </div> <!-- .content -->
        </div><!-- /#right-panel -->

        <!-- Right Panel -->

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