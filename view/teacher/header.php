<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher Page</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="view/assets/css/normalize.css">
    <link rel="stylesheet" href="view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/assets/css/themify-icons.css">
    <link rel="stylesheet" href="view/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="view/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="view/assets/scss/style.css">
    <link href="view/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
               <!--  <a class="navbar-brand" href="./"><img src="view/images/logo.png" alt="Logo"></a> -->
                <a class="navbar-brand hidden" href="./"><img src="view/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Trang Chủ</a>
                    </li>
                    <h3 class="menu-title">Chuyên Mục</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true"> <i class="menu-icon fa fa-laptop"></i>Khóa Học</a>
                        <ul class="sub-menu children dropdown-menu" id="top">
                            <li><i class="fa fa-puzzle-piece"></i><a href="teacher.php?action=view_program">Chuyên Đề</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="teacher.php?action=viewcourse">Bài Giảng</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="teacher.php?action=view_quizz">Trắc Nghiệm</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="teacher.php?action=view_exam">Bài Tập</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true"> <i class="menu-icon fa fa-suitcase"></i>Quản lý yêu cầu</a>
                        <ul class="sub-menu children dropdown-menu" id="buttom">
                            <li><i class="menu-icon fa fa-minus-square"></i><a href="teacher.php?action=view_waccept">Yêu Cầu Tham Gia</a></li>
                            <li><i class="menu-icon fa fa-check-square"></i><a href="teacher.php?action=view_student"></i>Đã gia nhập</a></li>  
                        </ul>
                       <!--  <a href="teacher.php?action=view_waccept" aria-haspopup="false" aria-expanded="true"> <i class="menu-icon fa fa-check-square"></i>Yêu Cầu Tham Gia </a> -->
                        <!-- <li class="active">
                            <a href="teacher.php?action=view_waccept"> <i class="menu-icon fa fa-check-square"></i>Yêu Cầu Tham Gia</a>
                        </li> -->
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
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger" id="count_noti"></span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification" id="show_notification">
                          </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                load_unseen_notification();
                                function load_unseen_notification(view = ''){
                                    console.log('1212121');
                                    $.ajax({
                                        url:"teacher.php?action=load_notification",
                                        method:"POST",
                                        data:{view:view},
                                        dataType:"json",
                                        success:function(data){
                                            for(var key in data) {
                                                $('#msgid').append(key);
                                                $('#msgid').append('=' + data[key] + '<br />');
                                            }
                                            $('#show_notification').html(data.notification);
                                                if(data.unseen_notification > 0)
                                                {
                                                    $('#count_noti').html(data.unseen_notification);
                                                }
                                        }
                                    })
                                }  

                                // $(document).on('click', '.dropdown-toggle', function(){
                                //     $('.count').html('');
                                //     load_unseen_notification('yes');
                                // });
                            });
                        </script>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Hi, <?php echo $_SESSION['arUser']['fullname']?></a>
                            <a class="nav-link" href="auth.php?action=logout"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header>